<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelompok extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'nama', 'id_penanggungjawab', 'alamat', 'nomor_hp', 'tanggal_berdiri', 'jenis_kelompok'
  ];

  protected $dates = ['deleted_at', 'tanggal_berdiri'];
}
