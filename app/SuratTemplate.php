<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratTemplate extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
      'nama', 'slug', 'kode', 'keterangan', 'html_code'
    ];

    protected $dates = ['deleted_at'];

    public function setNamaAttribute($value)
    {
      $this->attributes['nama'] = $value;
      $slug = str_slug($value);
      $this->attributes['slug'] = str_replace('-','_',$slug);
    }

}
