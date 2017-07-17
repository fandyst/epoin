<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoinDetail extends Model
{
    protected $tables = 'poin_detals';
    protected $fillable = ['poins_id', 'kode'];

    public function peraturan()
    {
      return $this->hasOne('App\Peraturan', 'kode', 'kode');
    }

}
