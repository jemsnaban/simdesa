<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'kk_no', 'kk_nik_kepala', 'kk_alamat', 'kk_id_cluster'
  ];
}
