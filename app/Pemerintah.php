<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemerintah extends Model
{
  protected $fillable = [
      'nik', 'nama', 'nip', 'id_jabatan'
  ];
}
