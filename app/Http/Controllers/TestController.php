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
          return view('tests.index')->with('tests',$tests);
    }
}
