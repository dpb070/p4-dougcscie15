
@extends('layouts.master')
@section('navbarSection')
@include('warningLimitsNavbar')
@stop
@section('pageContentSection')


<form method='POST' class="form-horizontal" action='/users/{{ $user->id }}'>
  {{ csrf_field() }}
  {{ method_field('PUT')}}
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
@stop
