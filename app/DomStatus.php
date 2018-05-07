<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomStatus extends Model
{
  protected $table = 'dom_statuses';
  protected $fillable = ["status"];
}
