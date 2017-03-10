<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluargaController extends Controller
{
  public function index($value='')
  {
    return view('penduduk.keluarga');
  }
}
