<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hubungan;

class HubunganController extends Controller
{
  public function index()
  {
    $hubungans = Hubungan::all();
    return view('masters.hubungan', compact('hubungans'));
  }

  public function store(Request $request)
  {
    Hubungan::create($request->all());

    return redirect('/master/hubungan');
  }

  public function update(Request $request)
  {
    $id = $request->id;

    $hubungan = Hubungan::findOrFail($id);
    $hubungan->update($request->all());

    return redirect('/master/hubungan');
  }

  public function destroy(Request $request)
  {
    $id = $request->id;

    $hubungan = Hubungan::findOrFail($id);
    //dd($hubungan);
    $hubungan->delete();

    return redirect('/master/hubungan');
  }
}
