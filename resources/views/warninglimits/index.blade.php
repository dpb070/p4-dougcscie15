
@extends('layouts.master')
@section('navbarSection')
@include('includes.warningLimitsNavbar')
@stop
@section('pageContentSection')

<div class="control_section">
    <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('warninglimits.create') }}">
        <span class="fa fa-plus-circle"></span> New
    </a>
</div>
@include('includes.warningLimitsTable')

@stop
