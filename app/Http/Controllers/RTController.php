<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;
use App\Rw;
use App\Rt;

class RTController extends Controller
{
  public function index()
  {
    $rts = Rt::all();
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
    $rt = Rt::findOrFail($id);
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
