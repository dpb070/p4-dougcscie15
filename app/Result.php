<?php
/**
* Doug Bradley
* CSCIE-15 Project 4
* Result - measurement value for a test for a user
* Soft deletes implemented
*/
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
