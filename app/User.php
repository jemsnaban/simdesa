<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser;
use Carbon\Carbon;

class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
      'created_at', 'last_login',
    ];
}
