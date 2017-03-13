<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;

class DusunController extends Controller
{
    public function index($value='')
    {
      $dusuns = Dusun::all();
      return view('dusun.index_dusun', compact('dusuns'));
    }

    public function create($value='')
    {
      return view('dusun.create_dusun');
    }

    public function store(Request $request)
    {
      Dusun::create($request->all());

      return redirect('/penduduk/wilayah');
    }

    public function edit($id)
    {
      $dusun = Dusun::findOrFail($id);

      return view('dusun.edit_dusun', compact('dusun'));
    }

    public function update(Request $request, $id)
    {
      $dusun = Dusun::findOrFail($id);
      $dusun->update($request->all());

      return redirect('/penduduk/wilayah');
    }

}
