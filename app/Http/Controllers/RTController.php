<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Dusun;
use App\Rw;
use App\Rt;

class RTController extends Controller
{
  public function index()
  {
    $rts = DB::table('rts AS a')
              ->leftJoin('penduduks AS b', 'b.id', '=', 'a.rt_ketua_id')
              ->leftJoin('rws AS c', 'c.id', '=', 'a.rt_rw_id')
              ->leftJoin('dusuns AS d', 'd.id', '=', 'a.rt_dusun_id')
              ->select('a.*', 'b.nama as ketua_rt', 'c.rw_nama as rw', 'd.dusun_nama as dusun')
              ->get();

    return view('rt.index_rt', compact('rts'));
  }

  public function create()
  {
    $dusuns = Dusun::all();
    $rws = Rw::all();
    return view('rt.create_rt')->with(compact('dusuns', 'rws'));
  }

  public function store(Request $request)
  {
    RT::create($request->all());

    return redirect('/penduduk/wilayah/rt');
  }

  public function edit($id)
  {
    $rt = DB::table('rts AS a')
              ->leftJoin('penduduks AS b', 'b.id', '=', 'a.rt_ketua_id')
              ->select('a.*', 'b.nama as ketua_rt', 'b.nik as rt_nik')
              ->where('a.id', '=', $id)
              ->get()->first();
              
    $rws = Rw::all();
    $dusuns = Dusun::all();

    return view('rt.edit_rt')->with(compact('rt', 'dusuns', 'rws'));
  }

  public function update(Request $request, $id)
  {
    $rt = Rt::findOrFail($id);
    $rt->update($request->all());

    return redirect('/penduduk/wilayah/rt');
  }

}
