<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\Test;

class TestController extends Controller
{

    public function index() {
      $tests = Test::all();
      if(!$tests->isEmpty()) {
          foreach($tests as $test) {
              echo $test->name.'<br>';
          }
      }
    }
}
