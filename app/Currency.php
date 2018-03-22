<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
  protected $table = 'currencies';
  protected $fillable = ["currency","isocode","cursymbol"];


  public function account(){
        return $this->belongsToMany('\App\Account','outlays')
            ->withPivot('cgestion_id','form_id','monto');
    }

  public function cgestion(){
      return $this->belongsToMany('\App\CGestion','outlays')
          ->withPivot('account_id','form_id','monto');
  }

  public function formulario(){
      return $this->belongsToMany('\App\FormularioIn','outlays')
          ->withPivot('account_id','cgestion_id','monto');
  }
}
