<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cacat;

class DisabilitasController extends Controller
{
    public function index()
    {
      $cacats = Cacat::all();

      return view('masters.disabilitas', compact('cacats'));
    }

    public function store(Request $request)
    {
      Cacat::create($request->all());

      return redirect('/master/disabilitas');
    }

    public function update(Request $request)
    {
      $id = $request->id;

      $cacat = Cacat::findOrFail($id);

      //dd($request->all());
      $cacat->update($request->all());

      return redirect('/master/disabilitas');
    }

    public function destroy(Request $request)
    {
      $id = $request->id;

      $cacat = Cacat::findOrFail($id);
      //dd($cacat);
      $cacat->delete();

      return redirect('/master/disabilitas');
    }
}
