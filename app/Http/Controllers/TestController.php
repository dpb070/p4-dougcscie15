<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\Test;
use Session;

class TestController extends Controller
{

    public function index() {
        $tests = Test::all();
          return view('tests.index')->with('tests',$tests);
    }

    public function delete($id) {
      $tests = Test::all();
        $testToDelete = Test::find($id);
        return view('tests.delete')->with('testToDelete', $testToDelete)->with('tests',$tests);
    }
    /**
    * POST
    */
    public function destroy($id)
    {
        # Get the book to be deleted
        $test = Test::find($id);

        # Then delete the book
        $test->delete();
        # Finish
        Session::flash('flash_message', $test->id.' was deleted.');
        return redirect('/tests');
    }


}
