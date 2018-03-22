<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomFaculty extends Model
{
  protected $table = 'dom_faculties';
  protected $fillable = ["unidad","autoridad"];
}
