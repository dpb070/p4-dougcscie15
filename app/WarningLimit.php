<?php

namespace P4;

use Illuminate\Database\Eloquent\Model;

class WarningLimit extends Model
{
  public function test() {
    return $this->belongsTo('P4\Test');
  }

  public function user() {
    return $this->belongsTo('P4\User');
  }
}
