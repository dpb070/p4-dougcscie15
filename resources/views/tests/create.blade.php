
@extends('layouts.master')
@section('navbarSection')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header navbar-brand">
      HealthTrack
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Tests</a></li>
      <li><a href="#">Results</a></li>
    </ul>
  </div>
</nav>
@stop
@section('pageContentSection')


<form method='POST' class="form-horizontal" action='/tests'>
  {{ csrf_field() }}
  <div class="control_section">
    <button type="submit" class="btn btn-success btn-xs">
      <span class="fa fa-save"></span>Save
    </button>
    <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('tests.index') }}">
      <span class="fa fa-rotate-left"></span>Cancel
    </a>
  </div>
  <div class="form_container">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="test name" size="10">
    </div>
    <div class="form-group">
      <label for="units">Units</label>
      <input type="text" class="form-control" name="units" placeholder="measurement units">
    </div>
    <div class="form-group">
      <label for="validation_low_limit">Validation Low Limit</label>
      <input type="text" class="form-control" name="validation_low_limit" placeholder="entry low limit for results">
    </div>
    <div class="form-group">
      <label for="validation_high_limit">Validation High Limit</label>
      <input type="text" class="form-control" name="validation_high_limit" placeholder="entry high limit for results">
    </div>
    <div class="form-group">
      <label for="default_low_warning">Default Low Warning Value</label>
      <input type="text" class="form-control" name="default_low_warning" placeholder="flag displayed results below this value">
    </div>
    <div class="form-group">
      <label for="default_high_warning">Default High Warning Value</label>
      <input type="text" class="form-control" name="default_high_warning" placeholder="flag displayed results above this value">
    </div>
    <div class="form-group">
      <label for="comments">Comments</label>
      <input type="text" class="form-control" name="comments" placeholder="additional comments">
    </div>
  </form>
</div>
@stop
