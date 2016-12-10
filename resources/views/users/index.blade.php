
@extends('layouts.master')
@section('navbarSection')
@include('includes.usersNavbar')
@stop
@section('pageContentSection')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading panel-title">Users</div>
        <div class="panel-body">

          <div class="panel-heading">
            @if ($newButton)
            <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('users.create') }}">
              <span class="fa fa-plus-circle"></span> New
            @endif
            </a>
          </div>
          @include('includes.usersTable')
        </div>
      </div>
    </div>
  </div>
</div>
@stop
