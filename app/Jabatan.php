<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jabatan extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'nama_jabatan'
  ];

  protected $dates = ['deleted_at'];
}
