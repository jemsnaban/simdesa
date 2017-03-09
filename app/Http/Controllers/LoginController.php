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
        //$user = Sentinel::registerAndActivate($request->all());
        //redirect($user);
        Sentinel::authenticate($request->all());

        return Sentinel::check();
    }

    public function logout($value='')
    {
      Sentinel::logout();
      return redirect('/login');
    }

    public function postRegister(Request $request)
    {
      $user = Sentinel::registerAndActivate($request->all());

      $role = Sentinel::findRoleBySlug('superadmin');

      $role->users()->attach($user);

      return redirect('/login');
    }
}
