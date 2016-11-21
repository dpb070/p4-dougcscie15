<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use P4\User;

class UserController extends Controller
{

    public function index() {
      $users = User::all();
      if(!$users->isEmpty()) {
          foreach($users as $user) {
              echo $user->name.'<br>';
          }
      }
    }
}
