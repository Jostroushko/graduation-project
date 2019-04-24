<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zayavki extends Model
{
    //
    protected $fillable = [
        'email',
        'fio',
        'tema',
        'price_id',
        'z_text'
    ];

    public function price()
  {
    return $this->belongsTo('App\Price');
  }
}
