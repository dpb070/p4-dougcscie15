<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\Test;


class TestController extends Controller
{
    /* from Route::get('tests' ...)*/
    public function index() {
        $tests = Test::all();
          return view('tests.index')->with('tests',$tests);
    }

    /* From Route::get('/tests/create' ...) */
    public function create() {
      return view('tests.create');
    }

    /* from Route::post('/tests' ...)  */
    public function store(Request $request) {
      $test = new Test();
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

    /* from  Route::get('/tests/{id}/edit' ...)  */
    public function edit($id) {
      $tests = Test::all();
        $testToDelete = Test::find($id);
        return view('tests.edit');
    }

    /* from  Route::put('/tests/{id}' ...)  */
    public function update($id) {
      $tests = Test::all();
        $testToDelete = Test::find($id);
        return redirect('/tests');
    }

    /* from  Route::get('/tests/{id}/delete' ...)  */
    public function delete($id) {
      $tests = Test::all();
        $testToDelete = Test::find($id);
        return view('tests.delete')->with('testToDelete', $testToDelete)->with('tests',$tests);
    }

    /* from Route::delete('/tests/{id}' ...) */
    public function destroy($id)
    {
        # Get the book to be deleted
        $test = Test::find($id);

        # Then delete the book
        $test->delete();
        # Finish
        return redirect('/tests');
    }


}
