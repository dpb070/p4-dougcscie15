
@extends('layouts.master')
@section('navbarSection')
@include('includes.testsNavbar')
@stop
@section('pageContentSection')

<div class="control_section">
    <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('tests.create') }}">
        <span class="fa fa-plus-circle"></span> New
    </a>
</div>

@include('includes.testsTable')
@stop
