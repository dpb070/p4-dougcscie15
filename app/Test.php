<?php

namespace P4;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model {

  use SoftDeletes;
  protected $dates = ['deleted_at'];

  public function results() {
    return $this->hasMany('P4\Result');
  }

  public function warningLimit() {
    return $this->hasMany('P4\WarningLimit');
  }

  // dropdown list of test ids and names - must be declared static
  public static function dropDownList() {
    $tests = Test::orderBy('name')->get();
    $testList = [];
    foreach($tests as $test) {
      $testList[$test->id] = $test->name;
    }
    return $testList;
  }
}
