<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\WarningLimit;

class WarningLimitController extends Controller

{
    /* from Route::get('warningLimits' ...)*/
    public function index() {
        $warningLimits = WarningLimit::all();
          return view('warninglimits.index')->with('warningLimits',$warningLimits)
                                    ->with('tableButtonState','enabled');
    }

    /* From Route::get('/warningLimits/create' ...) */
    public function create() {
      return view('warninglimits.create');
    }

    /* from Route::post('/warningLimits' ...)  */
    public function store(Request $request) {
      $warningLimit = new WarningLimit();
      $warningLimit->created_at = $request->created_at;
      $warningLimit->updated_at = $request->updated_at;
      $warningLimit->test_id =  $request->test_id;
      $warningLimit->user_id = $request->user_id;
      $warningLimit->low_warning = $request->low_warning;
      $warningLimit->high_warning = $request->high_warning;
      $warningLimit->save();
      return redirect('/warninglimits');

    }

    /* from  Route::get('/warningLimits/{id}/edit' ...)  */
    public function edit($id) {
       $warningLimit = WarningLimit::find($id);
        return view('warninglimits.edit')->with('warningLimit',$warningLimit);
    }

    /* from  Route::put('/warningLimits/{id}' ...)  */
    public function update(Request $request) {
      $warningLimit = WarningLimit::find($request->id);
      $warningLimit->created_at = $request->created_at;
      $warningLimit->updated_at = $request->updated_at;
      $warningLimit->test_id =  $request->test_id;
      $warningLimit->user_id = $request->user_id;
      $warningLimit->low_warning = $request->low_warning;
      $warningLimit->high_warning = $request->high_warning;
      $warningLimit->save();
      return redirect('/warninglimits');
    }

    /* from  Route::get('/warningLimits/{id}/delete' ...)  */
    public function delete($id) {
      $warningLimits = WarningLimit::all();
        $warningLimitToDelete = WarningLimit::find($id);
        return view('warninglimits.delete')->with('warningLimitToDelete', $warningLimitToDelete)
                                    ->with('warningLimits',$warningLimits)
                                    ->with('tableButtonState','disabled');
    }

    /* from Route::delete('/warningLimits/{id}' ...) */
    public function destroy($id)
    {
        $warningLimit = WarningLimit::find($id);

        $warningLimit->delete();

        return redirect('/warninglimits');
    }


}
