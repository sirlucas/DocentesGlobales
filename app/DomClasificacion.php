<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomClasificacion extends Model
{
  protected $table = 'dom_clasificacions';
  protected $fillable = ["clasificacion"];
}
