<?php

/**
* Doug Bradley
* CSCIE-15 Project 4
* controller functions for TESTS model/table processing
* if user not logged in, functions will return path to login page
*/

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\Test;
use Auth;


class TestController extends Controller
{
  // field validation
  private $nameRule = 'required';
  private $unitsRule = 'required';
  private $validationLowLimitRule = 'numeric';
  private $validationHighLimitRule = 'numeric';
  private $defaultLowWarningRule = 'numeric';
  private $defaultHighWarningRule = 'numeric';

  /* from Route::get('tests' ...)*/
  public function index() {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $tests = Test::all();
    return view('tests.index')
      ->with('user',$user)
      ->with('tests',$tests)
      ->with('tableButtonState','enabled');
  }

  /* From Route::get('/tests/create' ...) */
  public function create() {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $test = new Test();
    return view('tests.create')
      ->with('user',$user)
      ->with('test',$test);
  }

  /* from Route::post('/tests' ...)  */
  public function store(Request $request) {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }

    $this->validate($request,
                    ['name' => $this->nameRule,
                     'units' => $this->unitsRule,
                     'validation_low_limit' => $this->validationLowLimitRule,
                     'validation_high_limit' => $this->validationHighLimitRule,
                     'default_low_warning' => $this->defaultLowWarningRule,
                     'default_high_warning' => $this->defaultHighWarningRule
                    ]
                    );

    $test = new Test();
    $test->name =  $request->name;
    $test->units = $request->units;
    // nullable columns for doubles need casting to null when empty
    $test->validation_low_limit = empty($request->validation_low_limit) ? null : $request->validation_low_limit;
    $test->validation_high_limit = empty($request->validation_high_limit) ? null : $request->validation_high_limit;
    $test->default_low_warning = empty($request->default_low_warning) ? null : $request->default_low_warning;
    $test->default_high_warning = empty($request->default_high_warning) ? null : $request->default_high_warning;
    $test->comments = $request->comments;
    $test->save();
    return redirect('/tests');

  }

  /* from  Route::get('/tests/{id}/edit' ...)  */
  public function edit($id) {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $test = Test::find($id);
    return view('tests.edit')
      ->with('test',$test)
      ->with('user',$user);
  }

  /* from  Route::put('/tests/{id}' ...)  */
  public function update(Request $request) {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $this->validate($request,
                    ['name' => $this->nameRule,
                     'units' => $this->unitsRule,
                     'validation_low_limit' => $this->validationLowLimitRule,
                     'validation_high_limit' => $this->validationHighLimitRule,
                     'default_low_warning' => $this->defaultLowWarningRule,
                     'default_high_warning' => $this->defaultHighWarningRule
                    ]
                    );
    $test = Test::find($request->id);
    $test->name =  $request->name;
    $test->units = $request->units;
    $test->validation_low_limit = $request->validation_low_limit;
    $test->validation_high_limit = $request->validation_high_limit;
    $test->default_low_warning = $request->default_low_warning;
    $test->default_high_warning = $request->default_high_warning;
    $test->comments = $request->comments;
    $test->save();
    return redirect('/tests');
  }

  /* from  Route::get('/tests/{id}/delete' ...)  */
  public function delete($id) {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $tests = Test::all();
    $testToDelete = Test::find($id);
    return view('tests.delete')
      ->with('testToDelete', $testToDelete)
      ->with('tests',$tests)
      ->with('tableButtonState','disabled')
      ->with('user',$user);
  }

  /* from Route::delete('/tests/{id}' ...) */
  public function destroy($id)
  {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $test = Test::find($id);
    $test->delete();
    return redirect('/tests');
  }


}
