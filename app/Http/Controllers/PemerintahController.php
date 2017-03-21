<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pemerintah;
use App\Jabatan;

class PemerintahController extends Controller
{
    public function index()
    {
      $pemerintahs = DB::table('pemerintahs AS a')
            ->leftJoin('jabatans AS b', 'b.id', '=', 'a.id_jabatan')
            ->select('a.*', 'b.nama_jabatan')
            ->get();
      return view('pemerintah.index_pemerintah', compact('pemerintahs'));
    }

    public function create()
    {
      $jabatans = Jabatan::all();
      return view('pemerintah.create_pemerintah', compact('jabatans'));
    }

    public function store(Request $request)
    {
      Pemerintah::create($request->all());

      return redirect('/desa/pemerintah');
    }

    public function edit($id)
    {
      $jabatans = Jabatan::all();
      $pemerintah = DB::table('pemerintahs AS a')
            ->leftJoin('jabatans AS b', 'b.id', '=', 'a.id_jabatan')
            ->select('a.*', 'b.nama_jabatan')
            ->where('a.id', '=', $id)
            ->get()->first();
      return view('pemerintah.edit_pemerintah')->with(compact('pemerintah', 'jabatans'));
    }

    public function update(Request $request, $id)
    {
      $pemerintah = Pemerintah::findOrFail($id);
      $pemerintah->update($request->all());

      return redirect('/desa/pemerintah');
    }
}
