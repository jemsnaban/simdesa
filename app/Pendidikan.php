<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendidikan extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'nama'
  ];

  protected $dates = ['deleted_at'];
}
