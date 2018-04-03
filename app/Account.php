<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
  protected $table = 'accounts';
  protected $fillable = ["cuenta","codigo"];

  public function cgestion(){
        return $this->belongsToMany('App\CGestion','outlays')
            ->withPivot('currency_id','formulario_in_id','monto');
    }

  public function currency(){
      return $this->belongsToMany('App\Currency','outlays')
          ->withPivot('c_gestion_id','formulario_in_id','monto');
  }

  public function formulario(){
      return $this->belongsToMany('App\FormularioIn','outlays')
          ->withPivot('currency_id','c_gestion_id','monto');
  }
}
