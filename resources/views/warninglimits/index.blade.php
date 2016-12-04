
@extends('layouts.master')
@section('navbarSection')
@include('includes.warningLimitsNavbar')
@stop
@section('pageContentSection')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading panel-title">Warning Limits</div>
        <div class="panel-body">

          <div class="panel-heading">
            <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('warninglimits.create') }}">
              <span class="fa fa-plus-circle"></span> New
            </a>
          </div>

          @include('includes.warningLimitsTable')

        </div>
      </div>
    </div>
  </div>
</div>
@stop
