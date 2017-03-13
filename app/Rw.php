<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
  protected $fillable = [
      'rw_dusun_id', 'rw_nama', 'rw_ketua_id'
  ];
}
