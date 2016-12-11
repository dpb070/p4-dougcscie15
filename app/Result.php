<?php

namespace P4;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  
  public function test() {
    return $this->belongsTo('P4\Test');
  }

  public function user() {
    return $this->belongsTo('P4\User');
  }
}
