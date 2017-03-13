<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
    public function login()
    {
      return view('authentication.login');
    }

    public function postLogin(Request $request)
    {
      if (Sentinel::authenticate($request->all())){
        $slug = Sentinel::getUser()->roles()->first()->slug;
        //
        //if ( $slug == 'admin'){
          return redirect('/dashboard/statistik');
        //}
      } else {
        return redirect()->back()->with(['error' => 'wrong credentials']);
      }
    }

    public function logout($value='')
    {
      Sentinel::logout();
      return redirect('/login');
    }

    public function register()
    {
      return view('authentication.register');
    }

    public function postRegister(Request $request)
    {
      $user = Sentinel::registerAndActivate($request->all());

      $role = Sentinel::findRoleBySlug('superadmin');

      $role->users()->attach($user);

      return redirect('/login');
    }
}
