
@extends('layouts.master')
@section('navbarSection')
@include('usersNavbar')
@stop
@section('pageContentSection')


<form method='POST' class="form-horizontal" action='/users'>
  {{ csrf_field() }}
  <div class="control_section">
    <button type="submit" class="btn btn-success btn-xs">
      <span class="fa fa-save"></span>Save
    </button>
    <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('users.index') }}">
      <span class="fa fa-rotate-left"></span>Cancel
    </a>
  </div>
  <div class="form_container">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="user name" size="10">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" class="form-control" name="password" placeholder="password (restrictions)">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" placeholder="email address">
    </div>
    <div class="form-group">
      <label for="role">Role</label>
      <input type="text" class="form-control" name="role" placeholder="role">
    </div>
  </form>
</div>
@stop
