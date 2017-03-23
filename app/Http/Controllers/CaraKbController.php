<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaraKb;

class CaraKbController extends Controller
{
  public function index()
  {
    $carakbs = CaraKb::all();
    return view('masters.carakb', compact('carakbs'));
  }

  public function store(Request $request)
  {
    CaraKb::create($request->all());

    return redirect('/master/carakb');
  }

  public function update(Request $request)
  {
    $id = $request->id;

    $carakb = CaraKb::findOrFail($id);
    $carakb->update($request->all());

    return redirect('/master/carakb');
  }

  public function destroy(Request $request)
  {
    $id = $request->id;

    $carakb = CaraKb::findOrFail($id);
    //dd($carakb);
    $carakb->delete();

    return redirect('/master/carakb');
  }
}
