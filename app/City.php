<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  protected $table = 'cities';
  protected $fillable = ["ciudad","pais_id"];
  
  public function pais() {
    return $this->belongsTo('App\Country');
  }
}
