
@extends('layouts.master')
@section('navbarSection')
@include('resultsNavbar')
@stop
@section('pageContentSection')


<form method='POST' class="form-horizontal" action='/results'>
  {{ csrf_field() }}
  <div class="control_section">
    <button type="submit" class="btn btn-success btn-xs">
      <span class="fa fa-save"></span>Save
    </button>
    <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('results.index') }}">
      <span class="fa fa-rotate-left"></span>Cancel
    </a>
  </div>
  <div class="form_container">
    <div class="form-group">
      <label for="test_id">Test ID</label>
      <input type="text" class="form-control" name="test_id" placeholder="dropdown here" size="10">
    </div>
    <div class="form-group">
      <label for="user_id">User ID</label>
      <input type="text" class="form-control" name="user_id" placeholder="should be autofilled">
    </div>
    <div class="form-group">
      <label for="result_date">Result Date</label>
      <input type="text" class="form-control" name="result_date" placeholder="cal thing here">
    </div>
    <div class="form-group">
      <label for="value">Value</label>
      <input type="text" class="form-control" name="value" placeholder="enter result value">
    </div>
    <div class="form-group">
      <label for="comments">Comments</label>
      <input type="text" class="form-control" name="comments" placeholder="misc comments">
    </div>
  </form>
</div>
@stop
