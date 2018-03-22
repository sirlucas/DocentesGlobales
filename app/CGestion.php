<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CGestion extends Model
{
  protected $table = 'c_gestions';
  protected $fillable = ["cgestion","codigo"];



  public function account(){
        return $this->belongsToMany('\App\Account','outlays')
            ->withPivot('currency_id','form_id','monto');
    }

  public function currency(){
      return $this->belongsToMany('\App\Currency','outlays')
          ->withPivot('account_id','form_id','monto');
  }

  public function formulario(){
      return $this->belongsToMany('\App\FormularioIn','outlays')
          ->withPivot('account_id','currency_id','monto');
  }
}
