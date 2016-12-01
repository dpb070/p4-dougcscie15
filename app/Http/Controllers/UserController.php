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
          return view('users.index')->with('users',$users)
                                    ->with('tableButtonState','enabled');
    }

    /* From Route::get('/users/create' ...) */
    public function create() {
      return view('users.create');
    }

    /* from Route::post('/users' ...)  */
    public function store(Request $request) {
      $user = new User();
      $user->name =  $request->name;
      $user->email = $request->email;
      $user->password = $request->password;
      $user->role = $request->role;
      $user->remember_token= $request->remember_token;
      $user->created_at = $request->created_at;
      $user->updated_at = $request->updated_at;
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
      $user->email = $request->email;
      $user->password = $request->password;
      $user->role = $request->role;
      $user->remember_token= $request->remember_token;
      $user->created_at = $request->created_at;
      $user->updated_at = $request->updated_at;
      $user->save();
      return redirect('/users');
    }

    /* from  Route::get('/users/{id}/delete' ...)  */
    public function delete($id) {
      $users = User::all();
        $userToDelete = User::find($id);
        return view('users.delete')->with('userToDelete', $userToDelete)
                                    ->with('users',$users)
                                    ->with('tableButtonState','disabled');
    }

    /* from Route::delete('/users/{id}' ...) */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/users');
    }


}
