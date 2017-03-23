<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pekerjaan;

class PekerjaanController extends Controller
{
  public function index()
  {
    $pekerjaans = Pekerjaan::all();

    return view('masters.pekerjaan', compact('pekerjaans'));
  }

  public function store(Request $request)
  {
    Pekerjaan::create($request->all());

    return redirect('/master/pekerjaan');
  }

  public function update(Request $request)
  {
    $id = $request->id;

    $pekerjaan = Pekerjaan::findOrFail($id);

    //dd($request->all());
    $pekerjaan->update($request->all());

    return redirect('/master/pekerjaan');
  }

  public function destroy(Request $request)
  {
    $id = $request->id;

    $pekerjaan = Pekerjaan::findOrFail($id);
    //dd($pekerjaan);
    $pekerjaan->delete();

    return redirect('/master/pekerjaan');
  }
}
