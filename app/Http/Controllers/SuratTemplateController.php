<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratTemplate;

class SuratTemplateController extends Controller
{
  public function index()
  {
    $slug = "Ini test SLUG";
    $jadi = str_slug($slug);
    //dd(str_replace('-','_',$jadi));
    $templates = SuratTemplate::all();
    return view('surat.daftar_template', compact('templates'));
  }

  public function create()
  {
    return view('surat.surat_template_baru');
  }

  public function store(Request $request)
  {
    SuratTemplate::create($request->all());

    return redirect('/surat/daftar_template');
  }

  public function edit($id)
  {
    $template = SuratTemplate::findOrFail($id);

    return view('surat.surat_template_edit', compact('template'));
  }

  public function update(Request $request, $id)
  {
    $template = SuratTemplate::findOrFail($id);

    //dd($request->all());
    $template->update($request->all());

    return redirect('/surat/daftar_template');
  }

  public function delete(Request $request)
  {
    $id = $request->id;

    $template = SuratTemplate::findOrFail($id);
    //dd($jabatan);
    $template->delete();

    return redirect('/surat/daftar_template');
  }
}
