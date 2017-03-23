<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index()
    {
      return view('desa.index_desa');
    }
}
