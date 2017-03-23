<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;

class JabatanController extends Controller
{
  public function index()
  {
    $jabatans = Jabatan::all();

    return view('masters.jabatan', compact('jabatans'));
  }

  public function store(Request $request)
  {
    Jabatan::create($request->all());

    return redirect('/master/jabatan');
  }

  public function update(Request $request)
  {
    $id = $request->id;

    $jabatan = Jabatan::findOrFail($id);

    //dd($request->all());
    $jabatan->update($request->all());

    return redirect('/master/jabatan');
  }

  public function destroy(Request $request)
  {
    $id = $request->id;

    $jabatans = Jabatan::findOrFail($id);
    //dd($jabatan);
    $jabatan->delete();

    return redirect('/master/jabatan');
  }
}
