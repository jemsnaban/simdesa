<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agama;

class AgamaController extends Controller
{
    public function index()
    {
      $agamas = Agama::all();
      return view('masters.agama', compact('agamas'));
    }

    public function store(Request $request)
    {
      Agama::create($request->all());

      return redirect('/master/agama');
    }

    public function update(Request $request)
    {
      $id = $request->id;

      $agama = Agama::findOrFail($id);
      $agama->update($request->all());

      return redirect('/master/agama');
    }

    public function destroy(Request $request)
    {
      $id = $request->id;

      $agama = Agama::findOrFail($id);
      //dd($agama);
      $agama->delete();

      return redirect('/master/agama');
    }
}
