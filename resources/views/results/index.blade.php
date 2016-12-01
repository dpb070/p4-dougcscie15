
@extends('layouts.master')
@section('navbarSection')
@include('includes.resultsNavbar')
@stop
@section('pageContentSection')
<div class="control_section">
    <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('results.create') }}">
        <span class="fa fa-plus-circle"></span> New
    </a>
</div>
@include('includes.resultsTable')

@stop
