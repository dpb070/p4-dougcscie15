<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\User;

class UserController extends Controller

{
    /* from Route::get('users' ...)*/
    public function index() {
        $users = User::all();
          return view('users.index')->with('users',$users);
    }

    /* From Route::get('/users/create' ...) */
    public function create() {
      return view('users.create');
    }

    /* from Route::post('/users' ...)  */
    public function store(Request $request) {
      $user = new User();
      $user->name =  $request->name;
      $user->units = $request->units;
      $user->validation_low_limit = $request->validation_low_limit;
      $user->validation_high_limit = $request->validation_high_limit;
      $user->default_low_warning = $request->default_low_warning;
      $user->default_high_warning = $request->default_high_warning;
      $user->comments = $request->comments;
      $user->save();
      return redirect('/users');

    }

    /* from  Route::get('/users/{id}/edit' ...)  */
    public function edit($id) {
       $user = User::find($id);
        return view('users.edit')->with('user',$user);
    }

    /* from  Route::put('/users/{id}' ...)  */
    public function update(Request $request) {
      $user = User::find($request->id);
      $user->name =  $request->name;
      $user->units = $request->units;
      $user->validation_low_limit = $request->validation_low_limit;
      $user->validation_high_limit = $request->validation_high_limit;
      $user->default_low_warning = $request->default_low_warning;
      $user->default_high_warning = $request->default_high_warning;
      $user->comments = $request->comments;
      $user->save();
      return redirect('/users');
    }

    /* from  Route::get('/users/{id}/delete' ...)  */
    public function delete($id) {
      $users = User::all();
        $userToDelete = User::find($id);
        return view('users.delete')->with('userToDelete', $userToDelete)->with('users',$users);
    }

    /* from Route::delete('/users/{id}' ...) */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/users');
    }


}
