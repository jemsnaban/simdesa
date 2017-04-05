<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\SuratTemplate;
use App\Desa;
use PDF;

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

  public function edit_details($slug)
  {
    $surat = SuratTemplate::where('slug', $slug) -> first();
    $pemerintahs = DB::table('pemerintahs AS a')
          ->leftJoin('jabatans AS b', 'b.id', '=', 'a.id_jabatan')
          ->select('a.*', 'b.nama_jabatan')
          ->get();
    //dd($surat);
    return view('surat.templates.' . $slug . '.index', compact('surat', 'pemerintahs'));
  }

  public function preview(Request $request, $slug)
  {
    $infos = $request->all();
    $desa = Desa::all()->first();

    $data['infos'] = $infos;
    $data['desa'] = $desa;

    //dd($desa);
    //$pdf = PDF::loadView('surat.templates.' . $slug . '.preview', $data);
    //return $pdf->download('invoice.pdf');
    return view('surat.templates.' . $slug . '.preview', compact('infos', 'desa'));
  }

  public function pdf($data)
  {
    $pdf = PDF::loadView('pdf.invoice', $data);
    return $pdf->download('invoice.pdf');
  }

}
