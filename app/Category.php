<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function portfolios()
  {
    return $this->hasMany('App\Portfolio');
  }
}
