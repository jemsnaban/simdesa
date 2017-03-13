<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
  protected $fillable = [
      'dusun_nama', 'dusun_kadus_id'
  ];
}
