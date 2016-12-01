
@extends('layouts.master')
@section('navbarSection')
@include('includes.warningLimitsNavbar')
@stop
@section('pageContentSection')

<div class="control_section">
  <form method="POST" action="/users/{{ $warningLimitToDelete->id }}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <span class="action_msg">
      Delete
      <span class="imark">
      "{{ $warningLimitToDelete->id }}"
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
@stop
