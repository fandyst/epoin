<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dasbor extends Model
{
    protected $guarded = ['id'];
    public function user()
    {
      return $this->hasOne('App\User', 'id', 'users_id');
    }
}
