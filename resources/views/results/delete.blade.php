
@extends('layouts.master')
@section('navbarSection')
@include('includes.resultsNavbar')
@stop
@section('pageContentSection')

<div class="control_section">
  <form method="POST" action="/results/{{ $resultToDelete->id }}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <span class="action_msg">
      Delete
      <span class="imark">
      "{{ $resultToDelete->id }}"
    </span>
  </span>
  <button type="submit" class="btn btn-info btn-xs">
    <span class="fa fa-check"></span>Yes
  </button>
  <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('results.index') }}">
    <span class="fa fa-rotate-left"></span>No
  </a>
</form>
</div>

@include('includes.resultsTable')
@stop
