<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
      $users = DB::table('users AS a')
              ->leftJoin('role_users AS b', 'b.user_id', '=', 'a.id')
              ->leftJoin('roles AS c', 'b.role_id', '=', 'c.id')
              ->select('a.id', 'a.email', 'a.first_name', 'a.last_name',
                    'a.last_login', 'c.name as role', 'a.created_at'
                  )
              ->get();

      //dd($users);
      return view('users.index', compact('users'));
    }
}
