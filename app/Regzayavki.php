<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regzayavki extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'doptel',
        'adress',
        'z_tema',
        'price_id',
        'z_text'
    ];
    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function price()
  {
    return $this->belongsTo('App\Price');
  }
  public function status()
  {
    return $this->belongsTo('App\Status');
  }
}
