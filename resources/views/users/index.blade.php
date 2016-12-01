
@extends('layouts.master')
@section('navbarSection')
@include('includes.usersNavbar')
@stop
@section('pageContentSection')

<div class="control_section">
    <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('users.create') }}">
        <span class="fa fa-plus-circle"></span> New
    </a>
</div>

@include('includes.usersTable')
@stop
