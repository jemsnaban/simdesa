<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keluarga;

class KeluargaController extends Controller
{
  public function index($value='')
  {
    $keluargas = Keluarga::all();
    return view('keluarga.index_keluarga', compact('keluargas'));
  }

  public function create()
  {
    return view('keluarga.create_keluarga');
  }

  public function store(Request $request)
  {
    Keluarga::create($request->all());

    return redirect('/penduduk/keluarga');
  }

  public function edit($id)
  {
    $keluarga = Keluarga::findOrFail($id);
    //dd($keluarga);
    return view('keluarga.edit_keluarga', compact('keluarga'));
  }

  public function update(Request $request, $id)
  {
    $keluarga = Keluarga::findOrFail($id);
    $keluarga->update($request->all());

    return redirect('/penduduk/keluarga');
  }

  

}
