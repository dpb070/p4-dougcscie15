<?php
/**
* Doug Bradley
* CSCIE-15 Project 4
* controller functions for USERS model/table processing
* logged in non-ADMIN user can change name, password, and email
* if user not logged in, functions will return path to login page
*/
namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use DB;
use Carbon;
use P4\User;
use P4\Result;
use Auth;


class UserController extends Controller

{

  //field validation
  private $nameRule = 'required';
  private $emailRule = 'required|email|max:255|unique:users,email,'; //id added dynamically
  private $passwordRule = 'required|min:6';

  /* from Route::get('users/self' ...) */
  /* allows edit of own user record */
  public function indexself() {
    $appUser = Auth::user();
    if (! $appUser) {
      return redirect('/login');
    }
    $users = User::where('id',$appUser->id)->get();
    return view('users.index')
        ->with('users',$users)
        ->with('appUser',$appUser)
        ->with('editButton', True)
        ->with('deleteButton', False)
        ->with('tableButtonsEnabled', 'true');
  }

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
            ->with('editButton', True)
            ->with('deleteButton', True)
            ->with('tableButtonsEnabled', 'true');
      } else {
          return redirect('/login');
      }
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
      $this->validate($request,
                      ['name' => $this->nameRule,
                       'email' => $this->emailRule.$request->id,
                       'password' => $this->passwordRule
                      ]
                      );
      $user = User::find($request->id);
      if ( ($appUser->id == $user->id) or
           ($appUser->role == 'ADMIN') ) {
          $user = User::find($request->id);
          $user->name =  $request->name;
          $user->email = $request->email;
          if ($request->password !== $request->originalPassword) {
            $user->password = bcrypt($request->password);
          } else {
            $user->password = $request->password;
          }
          $user->role = $request->role;
          $user->remember_token= $request->remember_token;
          $user->created_at = $request->created_at;
          $user->updated_at = $request->updated_at;
          $user->save();
          return redirect('users/');
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
        ->with('editButton', True)
        ->with('deleteButton', True)
        ->with('newButton', True)
        ->with('tableButtonsEnabled','false');
  }

  /* from Route::delete('/users/{id}' ...) */
  /* delete (soft) associated results and then user */
  public function destroy($id)    {
    $appUser = Auth::user();
    if ((! $appUser) or ($appUser->role !== 'ADMIN')){
      return redirect('/login');
    }
    $results = Result::where('user_id', $id);
    $results->delete();
    $user = User::find($id);
    $user->delete();
    return redirect('/users');
  }


}
