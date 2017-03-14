<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Dusun;
use App\Rw;

class RWController extends Controller
{
    public function index()
    {
      $rws = DB::table('rws AS a')
                ->leftJoin('penduduks AS b', 'b.id', '=', 'a.rw_ketua_id')
                ->select('a.*', 'b.nama as ketua_rw')
                ->get();

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
      $rw = DB::table('rws AS a')
                ->leftJoin('penduduks AS b', 'b.id', '=', 'a.rw_ketua_id')
                ->select('a.*', 'b.nama as ketua_rw', 'b.nik as nik_rw')
                ->where('a.id', '=', $id)
                ->get()->first();
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
