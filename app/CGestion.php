<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CGestion extends Model
{
  protected $table = 'c_gestions';
  protected $fillable = ["cgestion","codigo", "responsable"];



  public function account(){
        return $this->belongsToMany('App\Account','outlays')
            ->withPivot('currency_id','formulario_in_id','monto')->withTimestamps();
    }

  public function currency(){
      return $this->belongsToMany('App\Currency','outlays')
          ->withPivot('account_id','formulario_in_id','monto')->withTimestamps();
  }

  public function formulario(){
      return $this->belongsToMany('App\FormularioIn','outlays')
          ->withPivot('account_id','currency_id','monto')->withTimestamps();
  }
}
