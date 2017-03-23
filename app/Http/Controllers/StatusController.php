<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
{
  public function index()
  {
    $statuses = Status::all();

    return view('masters.status', compact('statuses'));
  }

  public function store(Request $request)
  {
    Status::create($request->all());

    return redirect('/master/status');
  }

  public function update(Request $request)
  {
    $id = $request->id;

    $status = Status::findOrFail($id);

    //dd($request->all());
    $status->update($request->all());

    return redirect('/master/status');
  }

  public function destroy(Request $request)
  {
    $id = $request->id;

    $status = Status::findOrFail($id);
    //dd($status);
    $status->delete();

    return redirect('/master/status');
  }
}
