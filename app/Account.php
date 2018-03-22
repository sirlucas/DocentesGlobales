<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
  protected $table = 'accounts';
  protected $fillable = ["cuenta","codigo"];

  public function cgestion(){
        return $this->belongsToMany('\App\CGestion','outlays')
            ->withPivot('currency_id','form_id','monto');
    }

  public function currency(){
      return $this->belongsToMany('\App\Currency','outlays')
          ->withPivot('cgestion_id','form_id','monto');
  }

  public function formulario(){
      return $this->belongsToMany('\App\FormularioIn','outlays')
          ->withPivot('currency_id','cgestion_id','monto');
  }
}
