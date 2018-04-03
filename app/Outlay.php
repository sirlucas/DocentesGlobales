<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlay extends Model
{
  protected $table = 'outlays';
  protected $fillable = ["monto",'c_gestion_id','currency_id','account_id','formulario_in_id'];



  public function divisa(){
    return $this->hasOne('App\Currency','id','currency_id');
  }

  public function cuenta(){
    return $this->hasOne('App\Account','id','account_id');
  }

  public function cgestion(){
    return $this->hasOne('App\CGestion','id','c_gestion_id');
  }

/* revisar para has many
  public function formulario(){
    return $this->belongsTo('App\FormularioIn','id','form_id');
  } */
}
