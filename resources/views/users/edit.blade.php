
@extends('layouts.master')
@section('navbarSection')
@include('includes.usersNavbar')
@stop
@section('pageContentSection')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading panel-title">Result</div>
        <div class="panel-body">

          <form method='POST' action='/users/{{ $user->id }}'>
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="panel-heading">
              <button type="submit" class="btn btn-success btn-xs">
                <span class="fa fa-save"></span>Save
              </button>
              <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('users.index') }}">
                <span class="fa fa-rotate-left"></span>Cancel
              </a>
            </div>
            <div class="form_container">
              <div class="form-group">
                <input name="id" value="{{ $user->id }}" type="hidden">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
              </div>
              <div class="form-group">
                <label for="email">Password</label>
                <input type="text" class="form-control" name="password" value="{{ old('password', $user->password) }}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}">
              </div>
              <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" name="role" value="{{ old('role', $user->role) }}">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
