<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index($value='')
    {
      return view('penduduk.wilayah');
    }
}
