<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $timestamps = false;
    protected $fillable = ['nis','nama'];
}
