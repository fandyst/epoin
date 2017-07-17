<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    public $timestamps = false;
    protected $fillable = ['kode', 'nama_peraturan','poin'];
}
