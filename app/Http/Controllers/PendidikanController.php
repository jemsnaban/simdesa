<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendidikan;

class PendidikanController extends Controller
{
  public function index()
  {
    $pendidikans = Pendidikan::all();

    return view('masters.pendidikan', compact('pendidikans'));
  }

  public function store(Request $request)
  {
    Pendidikan::create($request->all());

    return redirect('/master/pendidikan');
  }

  public function update(Request $request)
  {
    $id = $request->id;

    $pendidikan = Pendidikan::findOrFail($id);

    //dd($request->all());
    $pendidikan->update($request->all());

    return redirect('/master/pendidikan');
  }

  public function destroy(Request $request)
  {
    $id = $request->id;

    $pendidikan = Pendidikan::findOrFail($id);
    //dd($pendidikan);
    $pendidikan->delete();

    return redirect('/master/pendidikan');
  }
}
