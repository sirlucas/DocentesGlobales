<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomCargo extends Model
{
  protected $table = 'dom_cargos';
  protected $fillable = ["cargo"];
}
