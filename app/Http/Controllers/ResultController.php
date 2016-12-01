<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\Result;

class ResultController extends Controller

{
    /* from Route::get('results' ...)*/
    public function index() {
        $results = Result::all();
          return view('results.index')->with('results',$results)
                                    ->with('tableButtonState','enabled');
    }

    /* From Route::get('/results/create' ...) */
    public function create() {
      return view('results.create');
    }

    /* from Route::post('/results' ...)  */
    public function store(Request $request) {
      $result = new Result();
      $result->test_id =  $request->test_id;
      $result->user_id = $request->user_id;
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
       $result = Result::find($id);
        return view('results.edit')->with('result',$result);
    }

    /* from  Route::put('/results/{id}' ...)  */
    public function update(Request $request) {
      $result = Result::find($request->id);
      $result->test_id =  $request->test_id;
      $result->user_id = $request->user_id;
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
      $results = Result::all();
        $resultToDelete = Result::find($id);
        return view('results.delete')->with('resultToDelete', $resultToDelete)
                                    ->with('results',$results)
                                    ->with('tableButtonState','disabled');
    }

    /* from Route::delete('/results/{id}' ...) */
    public function destroy($id)
    {
        $result = Result::find($id);

        $result->delete();

        return redirect('/results');
    }


}
