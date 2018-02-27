<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
  protected $table = 'hosts';
  protected $fillable = ["nombre","cargo"];

  public function formularios() {
    return $this->belongsTo('App\Formulario');
	}
}
