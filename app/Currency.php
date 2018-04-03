<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
  protected $table = 'currencies';
  protected $fillable = ["currency","isocode","cursymbol"];


  public function account(){
        return $this->belongsToMany('App\Account','outlays')
            ->withPivot('c_gestion_id','formulario_in_id','monto');
    }

  public function cgestion(){
      return $this->belongsToMany('App\CGestion','outlays')
          ->withPivot('account_id','formulario_in_id','monto');
  }

  public function formulario(){
      return $this->belongsToMany('App\FormularioIn','outlays')
          ->withPivot('account_id','c_gestion_id','monto');
  }
}
