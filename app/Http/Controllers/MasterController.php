<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agama;

class MasterController extends Controller
{
    public function agama()
    {
      $agamas = Agama::all();
      return view('masters.agama', compact('agamas'));
    }
}
