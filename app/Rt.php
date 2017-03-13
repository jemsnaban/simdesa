<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
  protected $fillable = [
      'rt_dusun_id', 'rt_rw_id', 'rt_nama', 'rt_ketua_id'
  ];
}
