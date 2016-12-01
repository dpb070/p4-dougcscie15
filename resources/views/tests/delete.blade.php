
@extends('layouts.master')
@section('navbarSection')
@include('includes.testsNavbar')
@stop
@section('pageContentSection')

<div class="control_section">
  <form method="POST" action="/tests/{{ $testToDelete->id }}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <span class="action_msg">
      Delete
      <span class="imark">
      "{{ $testToDelete->name }}"
    </span>
  </span>
  <button type="submit" class="btn btn-info btn-xs">
    <span class="fa fa-check"></span>Yes
  </button>
  <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('tests.index') }}">
    <span class="fa fa-rotate-left"></span>No
  </a>
</form>
</div>

@include('includes.testsTable')
@stop
