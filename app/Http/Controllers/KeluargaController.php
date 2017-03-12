<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keluarga;

class KeluargaController extends Controller
{
  public function index($value='')
  {
    $keluargas = Keluarga::all();
    return view('penduduk.keluarga', compact('keluargas'));
  }

  public function create()
  {
    
  }
}
