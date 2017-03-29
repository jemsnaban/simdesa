<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratTemplate;

class SuratController extends Controller
{
  public function index()
  {
    $slug = "Ini test SLUG";
    $jadi = str_slug($slug);
    //dd(str_replace('-','_',$jadi));
    $templates = SuratTemplate::all();
    return view('surat.daftar_surat', compact('templates'));
  }

  public function edit_details($id)
  {
    # code...
  }
}
