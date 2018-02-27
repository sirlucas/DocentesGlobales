<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  protected $table = 'countries';
  protected $fillable = ["pais"];
  
  public function ciudad() {
    return $this->hasMany('App\City');
  }
}
