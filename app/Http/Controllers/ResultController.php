<?php

/*
* Doug Bradley
* CSCIE-15 Project 4
* controller functions for RESULTS model/table processing
* if user not logged in, functions will return path to login page
*/

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\Result;
use P4\Test;
use Auth;

class ResultController extends Controller

{

  /* from Route::get('results' ...)*/
  public function index() {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    // $results = Result::where('user_id', $user->id)
    $results = Result::with('test')
      ->where('user_id', $user->id)
      ->get()
      ->sortByDesc('result_date');
    return view('results.index')
      ->with('user',$user)
      ->with('results',$results)
      ->with('tableButtonState','enabled');
  }

  /* From Route::get('/results/create' ...) */
  public function create() {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $testList = Test::dropDownList();
    return view('results.create')
      ->with('user',$user)
      ->with('testList',$testList);
  }

  /* from Route::post('/results' ...)  */
  public function store(Request $request) {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $result = new Result();
    $result->test_id =  $request->test_id;
    $result->user_id = $user->id;           //from user object
    $result->result_date = $request->result_date;
    $result->value = $request->value;
    $result->comments= $request->comments;
    $result->created_at = $request->created_at;
    $result->updated_at = $request->updated_at;
    $result->save();
    return redirect('/results');

  }

  /* from  Route::get('/results/{id}/edit' ...)  */
  public function edit($id) {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $result = Result::find($id);
    $testList = Test::dropDownList();
    return view('results.edit')
      ->with('result',$result)
      ->with('user',$user)
      ->with('testList',$testList);
  }

  /* from  Route::put('/results/{id}' ...)  */
  public function update(Request $request) {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $result = Result::find($request->id);
    $result->test_id =  $request->test_id;
    $result->user_id = $user->id;           //from user object
    $result->result_date = $request->result_date;
    $result->value = $request->value;
    $result->comments= $request->comments;
    $result->created_at = $request->created_at;
    $result->updated_at = $request->updated_at;
    $result->save();
    return redirect('/results');
  }

  /* from  Route::get('/results/{id}/delete' ...)  */
  public function delete($id) {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $results = Result::with('test')
      ->where('user_id', $user->id)
      ->get()
      ->sortByDesc('result_date');
    $resultToDelete = Result::find($id);
    return view('results.delete')->with('resultToDelete', $resultToDelete)
      ->with('results',$results)
      ->with('tableButtonState','disabled')
      ->with('user',$user);
  }

  /* from Route::delete('/results/{id}' ...) */
  public function destroy($id)
  {
    $user = Auth::user();
    if (! $user) {
      return redirect('/login');
    }
    $result = Result::find($id);
    $result->delete();
    return redirect('/results');
  }


}
