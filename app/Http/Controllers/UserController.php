<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\User;
use Auth;

class UserController extends Controller

{
  /* from Route::get('users' ...)*/
  public function index() {
      $appUser = Auth::user();
      if (! $appUser) {
          return redirect('/login');
      }
      if ($appUser->role == 'ADMIN') {
          $users = User::all();
          return view('users.index')
            ->with('users',$users)
            ->with('appUser',$appUser)
            ->with('tableButtonsEnabled', 'true');
      }
      else {
          $users = User::where('id', $appUser->id);
          return view('users.index')
            ->with('users',$users)
            ->with('appUser',$appUser)
            ->with('tableButtonsEnabled', 'true');
      }
  }

  /* From Route::get('/users/create' ...) */
  public function create() {
    $appUser = Auth::user();
    if ((! $appUser) or ($appUser->role !== 'ADMIN')){
      return redirect('/login');
    }
    $user = new User();
    return view('users.create')
    ->with('appUser',$appUser)
    ->with('user',$user);
  }

  /* from Route::post('/users' ...)  */
  public function store(Request $request) {
    $appUser = Auth::user();
    if ((! $appUser) or ($appUser->role !== 'ADMIN')){
      return redirect('/login');
    }
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
      // users may edit certain fields of their own information
      $appUser = Auth::user();
      $user = User::find($id);
      if (
            ($appUser->id == $user->id) or
            ($appUser->role == 'ADMIN')
         ){
             return view('users.edit')
             ->with('user',$user)
             ->with('appUser',$appUser);
      }
      else {
          return redirect('/login');
      }
  }

  /* from  Route::put('/users/{id}' ...)  */
  public function update(Request $request) {
      $appUser = Auth::user();
      $user = User::find($id);
      if ( ($appUser->id == $user->id) or
           ($appUser->role == 'ADMIN') ) {
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
      } else
      {
          return redirect('/login');
      }
  }

  /* from  Route::get('/users/{id}/delete' ...)  */
  public function delete($id) {
    $appUser = Auth::user();
    if ((! $appUser) or ($appUser->role !== 'ADMIN')){
      return redirect('/login');
    }
    $users = User::all();
    $userToDelete = User::find($id);
    return view('users.delete')->with('userToDelete', $userToDelete)
        ->with('users',$users)
        ->with('appUser',$appUser)
        ->with('tableButtonsEnabled','false');
  }

  /* from Route::delete('/users/{id}' ...) */
  public function destroy($id)    {
    $appUser = Auth::user();
    if ((! $appUser) or ($appUser->role !== 'ADMIN')){
      return redirect('/login');
    }
    $user = User::find($id);
    $user->delete();
    return redirect('/users');
  }


}
