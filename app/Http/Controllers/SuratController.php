<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
      $templates = array();
      return view('surat.daftar_surat', compact('templates'));
    }
}
