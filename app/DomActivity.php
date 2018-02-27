<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomActivity extends Model
{
  protected $table = 'dom_activities';
  protected $fillable = ["actividad"];
}
