<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Dusun;
use App\Penduduk;

class DusunController extends Controller
{
    public function index($value='')
    {
      $dusuns = DB::table('dusuns AS a')
                ->leftJoin('penduduks AS b', 'b.id', '=', 'a.dusun_kadus_id')
                ->select('a.*', 'b.nama as kadus')
                ->get();
      return view('dusun.index_dusun', compact('dusuns'));
    }

    public function create($value='')
    {
      return view('dusun.create_dusun');
    }

    public function store(Request $request)
    {
      Dusun::create($request->all());

      return redirect('/penduduk/wilayah/dusun');
    }

    public function edit($id)
    {
      $dusun = DB::table('dusuns AS a')
                ->leftJoin('penduduks AS b', 'b.id', '=', 'a.dusun_kadus_id')
                ->select('a.*', 'b.nama as kadus', 'b.nik as kadus_nik')
                ->where('a.id', '=', $id)
                ->get()->first();

      return view('dusun.edit_dusun', compact('dusun'));
    }

    public function update(Request $request, $id)
    {
      $dusun = Dusun::findOrFail($id);
      $dusun->update($request->all());

      return redirect('/penduduk/wilayah/dusun');
    }

    public function autoComplete(Request $request) {
        $query = $request->get('term','');

        $penduduks = Penduduk::where('nama','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($penduduks as $penduduk) {
              $data[]=array('value' => $penduduk->nama." - ".$penduduk->nik , 'id' => $penduduk->id);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }

}
