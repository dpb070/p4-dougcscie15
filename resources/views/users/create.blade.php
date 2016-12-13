
@extends('layouts.master')
@section('navbarSection')
@include('includes.usersNavbar')
@stop
@section('pageContentSection')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading panel-title">User</div>
        <div class="panel-body">

<form method='POST' class="form-horizontal" action='/users'>
  {{ csrf_field() }}
            <div class="panel-heading">
    <button type="submit" class="btn btn-success btn-xs">
      <span class="fa fa-save"></span>Save
    </button>
    <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('users.index') }}">
      <span class="fa fa-rotate-left"></span>Cancel
    </a>
  </div>
  <div class="form_container">
              @include('includes.usersFormCore')
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
