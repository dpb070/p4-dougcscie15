<?php
/*
* Doug Bradley
* CSCIE-15 Project 4
* controller functions for WARNING_LIMITS model/table processing
* if user not logged in, functions will return path to login page
*/
namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\WarningLimit;
use P4\Test;
use Auth;

class WarningLimitController extends Controller

{
    // field validation
    private $lowWarningRule = 'numeric';
    private $highWarningRule = 'numeric';

    /* from Route::get('warningLimits' ...)*/
    public function index() {
      $appUser = Auth::user();
      if (! $appUser) {
        return redirect('/login');
      }
        $warningLimits = WarningLimit::with('test')
                                    ->where('user_id', $appUser->id)
                                    ->get();
          return view('warninglimits.index')->with('warningLimits',$warningLimits)
                                    ->with('tableButtonsEnabled','true')
                                    ->with('appUser',$appUser);
    }

    /* From Route::get('/warningLimits/create' ...) */
    public function create() {
      $appUser = Auth::user();
      if (! $appUser) {
        return redirect('/login');
      }
      $warningLimit = new WarningLimit();
      $testList = Test::dropDownList();
      return view('warninglimits.create')
        ->with('appUser',$appUser)
        ->with('testList',$testList)
        ->with('warningLimit',$warningLimit);
    }

    /* from Route::post('/warningLimits' ...)  */
    public function store(Request $request) {
      $appUser = Auth::user();
      if (! $appUser) {
        return redirect('/login');
      }
      $this->validate($request,
                        ['low_warning' => $this->lowWarningRule,
                        'high_warning' => $this->highWarningRule
                        ]
                      );
      $warningLimit = new WarningLimit();
      $warningLimit->created_at = $request->created_at;
      $warningLimit->updated_at = $request->updated_at;
      $warningLimit->test_id =  $request->test_id;
      $warningLimit->user_id = $appUser->id;           //from user object
      // nullable columns for doubles need casting to null when empty
      $warningLimit->low_warning = empty($request->low_warning) ? null : $request->low_warning;
      $warningLimit->high_warning = empty($request->high_warning) ? null : $request->high_warning;
      $warningLimit->save();
      return redirect('/warninglimits');

    }

    /* from  Route::get('/warningLimits/{id}/edit' ...)  */
    public function edit($id) {
      $appUser = Auth::user();
      if (! $appUser) {
        return redirect('/login');
      }
      $testList = Test::dropDownList();
      $warningLimit = WarningLimit::find($id);
      return view('warninglimits.edit')
        ->with('warningLimit',$warningLimit)
        ->with('appUser',$appUser)
        ->with('testList',$testList);
    }

    /* from  Route::put('/warningLimits/{id}' ...)  */
    public function update(Request $request) {
      $appUser = Auth::user();
      if (! $appUser) {
        return redirect('/login');
      }
        $this->validate($request,
                          ['low_warning' => $this->lowWarningRule,
                          'high_warning' => $this->highWarningRule
                          ]
                        );
      $warningLimit = WarningLimit::find($request->id);
      $warningLimit->created_at = $request->created_at;
      $warningLimit->updated_at = $request->updated_at;
      $warningLimit->test_id =  $request->test_id;
      $warningLimit->user_id = $appUser->id;           //from user object
      // nullable columns for doubles need casting to null when empty
      $warningLimit->low_warning = empty($request->low_warning) ? null : $request->low_warning;
      $warningLimit->high_warning = empty($request->high_warning) ? null : $request->high_warning;
      $warningLimit->save();
      return redirect('/warninglimits');
    }

    /* from  Route::get('/warningLimits/{id}/delete' ...)  */
    public function delete($id) {
      $appUser = Auth::user();
      if (! $appUser) {
        return redirect('/login');
      }
      $warningLimits = WarningLimit::all();
      $warningLimitToDelete = WarningLimit::find($id);
      return view('warninglimits.delete')
                  ->with('warningLimitToDelete', $warningLimitToDelete)
                  ->with('warningLimits',$warningLimits)
                  ->with('tableButtonsEnabled','false')
                  ->with('appUser',$appUser);
    }

    /* from Route::delete('/warningLimits/{id}' ...) */
    public function destroy($id)
    {
      $appUser = Auth::user();
      if (! $appUser) {
        return redirect('/login');
      }
      $warningLimit = WarningLimit::find($id);
      $warningLimit->delete();
      return redirect('/warninglimits');
    }


}
