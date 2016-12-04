
@extends('layouts.master')
@section('navbarSection')
@include('includes.resultsNavbar')
@stop
@section('pageContentSection')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading panel-title">Results</div>
        <div class="panel-body">

          <div class="panel-heading">
            <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('results.create') }}">
              <span class="fa fa-plus-circle"></span> New
            </a>
          </div>

          @include('includes.resultsTable')

        </div>
      </div>
    </div>
  </div>
</div>
@stop
