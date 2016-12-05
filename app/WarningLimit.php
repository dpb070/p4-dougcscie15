<?php

namespace P4;

use Illuminate\Database\Eloquent\Model;

class WarningLimit extends Model
{
  public function results() {
    return $this->hasMany('P4\Result');
  }

  public function warningLimit() {
    return $this->hasMany('P4\WarningLimit');
  }
}
