<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Desa;

class DesaController extends Controller
{
    public function index()
    {
      $desa = new Desa;
      $desa->nama = '';
      $desa->alamat_kantor = '';
      $desa->kades_id = '';
      $desa->kode_pos = '';
      $desa->nama_camat = '';
      $desa->nip_camat = '';
      $desa->kabupaten = '';
      $desa->provinsi = '';

      $desas = DB::table('desas AS a')
                ->leftJoin('penduduks AS b', 'b.id', '=', 'a.kades_id')
                ->select('a.*', 'b.nama as kades')
                ->get();

      if ($desas->first()){
        $desa = $desas->first();
      }

      //dd($desa);

      return view('desa.index_desa', compact('desa'));
    }

    public function storeorupdate(Request $request)
    {
      $desas = Desa::all();

      //update
      if ($desas->first()){
          $desa = $desas->first();

          $desa->update($request->all());

      } else { //add new
        Desa::create($request->all());
      }

      return redirect('/desa/identitas');
    }
}
