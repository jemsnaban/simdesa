<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;
use App\Rw;

class RWController extends Controller
{
    public function index()
    {
      $rws = Rw::all();
      return view('rw.index_rw', compact('rws'));
    }

    public function create()
    {
      $dusuns = Dusun::all();
      return view('rw.create_rw')->with(compact('dusuns'));
    }

    public function store(Request $request)
    {
      Rw::create($request->all());

      return redirect('/penduduk/wilayah/rw');
    }

    public function edit($id)
    {
      $rw = Rw::findOrFail($id);
      $dusuns = Dusun::all();

      return view('rw.edit_rw')->with(compact('rw', 'dusuns'));
    }

    public function update(Request $request, $id)
    {
      $rw = Rw::findOrFail($id);
      $rw->update($request->all());

      return redirect('/penduduk/wilayah/rw');
    }
}
