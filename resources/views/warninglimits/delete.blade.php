
@extends('layouts.master')
@section('navbarSection')
@include('includes.warningLimitsNavbar')
@stop
@section('pageContentSection')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading panel-title">Warning Limit</div>
        <div class="panel-body">

          <div class="panel-heading">
            <form method="POST" action="/warninglimits/{{ $warningLimitToDelete->id }}">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <span class="action_msg">
                Delete warning limit for
                <span class="imark">
                  "{{ $warningLimitToDelete->test->name }}"
                </span>
              </span>
              <button type="submit" class="btn btn-info btn-xs">
                <span class="fa fa-check"></span>Yes
              </button>
              <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('warninglimits.index') }}">
                <span class="fa fa-rotate-left"></span>No
              </a>
            </form>
          </div>

          @include('includes.warningLimitsTable')
        </div>
      </div>
    </div>
  </div>
</div>
@stop
