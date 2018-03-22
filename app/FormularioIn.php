<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Modelo para formularios "International visit request - Internal (Personal de la UDD)"
class FormularioIn extends Model
{
  protected $table = 'formularios';
  protected $fillable = [
      'nombre','rut','email',
      'telefono','dom_cargo_id','dom_unidad_id','dom_carrera_id',
      'dom_sede_id','institucion_anf','inst_descripcion','website',
      'contacto_anf','cont_cargo','cont_email','cont_fono','fecha_ida',
      'fecha_retorno','dom_clasificacion_id','proposito','dom_actividad_id',
      'dom_ciudad_id','duracion_act','ipt','observaciones','plan_estudio','colaboracion',
      'postitulo'
  ];

  public function users(){
    return $this->belongsToMany('\App\User','user_has_forms')
   ->withPivot('user_id','fecha');
 }

 public function cargo(){
   return $this->hasOne('App\DomCargo','id','dom_cargo_id');
 }

  public function unidad(){
    return $this->hasOne('App\DomFaculty','id','dom_unidad_id');
  }

  public function carrera(){
    return $this->hasOne('App\DomCareer','id','dom_carrera_id');
  }

  public function sede(){
    return $this->hasOne('App\DomSede','id','dom_sede_id');
  }

  public function clasificacion(){
    return $this->hasOne('App\DomClasificacion','id','dom_clasificacion_id');
  }

  public function actividad(){
        return $this->hasOne('App\DomActivity','id','dom_actividad_id');
    }

  public function ciudad(){
    return $this->hasOne('App\City','id','dom_ciudad_id');
  }

  public function host(){
    return $this->hasMany('App\Host');
  }

  // para outlays

  public function cgestion(){
        return $this->belongsToMany('\App\CGestion','outlays')
            ->withPivot('currency_id','account_id','monto');
    }

  public function currency(){
      return $this->belongsToMany('\App\Currency','outlays')
          ->withPivot('cgestion_id','account_id','monto');
  }

  public function account(){
      return $this->belongsToMany('\App\Account','outlays')
          ->withPivot('currency_id','cgestion_id','monto');
  }

}