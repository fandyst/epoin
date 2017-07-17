<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    public $timestamps = false;

    protected $fillable = ['nis','jml_poin'];

    public function siswa()
    {
      return $this->hasOne('App\Siswa', 'nis', 'nis');
    }

}
