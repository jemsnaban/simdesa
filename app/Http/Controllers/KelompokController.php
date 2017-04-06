<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelompok;

class KelompokController extends Controller
{
  public function index($value='')
  {
    $kelompoks = Kelompok::all();
    return view('kelompok.index_kelompok', compact('kelompoks'));
  }
}
