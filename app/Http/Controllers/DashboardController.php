<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function statistik($value='')
    {
      return view('dashboard.statistik');
    }

    public function laporan($value='')
    {
      return view('dashboard.laporan');
    }
}
