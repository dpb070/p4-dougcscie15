
@extends('layouts.master')
@section('navbarSection')
@include('includes.resultsNavbar')
@stop
@section('pageContentSection')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading panel-title">Result</div>
        <div class="panel-body">

          <form method='POST' action='/results/{{ $result->id }}'>
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="panel-heading">
              <button type="submit" class="btn btn-success btn-xs">
                <span class="fa fa-save"></span>Save
              </button>
              <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('results.index') }}">
                <span class="fa fa-rotate-left"></span>Cancel
              </a>
            </div>
            <div class="form_container">
              @include('includes.resultsFormCore')
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
