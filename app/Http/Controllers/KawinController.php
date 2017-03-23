<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kawin;

class KawinController extends Controller
{
  public function index()
  {
    $kawins = Kawin::all();

    return view('masters.kawin', compact('kawins'));
  }

  public function store(Request $request)
  {
    Kawin::create($request->all());

    return redirect('/master/kawin');
  }

  public function update(Request $request)
  {
    $id = $request->id;

    $kawin = Kawin::findOrFail($id);

    //dd($request->all());
    $kawin->update($request->all());

    return redirect('/master/kawin');
  }

  public function destroy(Request $request)
  {
    $id = $request->id;

    $kawin = Kawin::findOrFail($id);
    //dd($kawin);
    $kawin->delete();

    return redirect('/master/kawin');
  }
}
