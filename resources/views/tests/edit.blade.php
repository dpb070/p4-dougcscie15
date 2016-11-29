
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


<form method='POST' class="form-horizontal" action='/tests/{{ $test->id }}'>
  {{ csrf_field() }}
  {{ method_field('PUT')}}
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
      <input name="id" value="{{ $test->id }}" type="hidden">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" value="{{ old('name', $test->name) }}">
    </div>
    <div class="form-group">
      <label for="units">Units</label>
      <input type="text" class="form-control" name="units" value="{{ old('units', $test->units) }}">
    </div>
    <div class="form-group">
      <label for="validation_low_limit">Validation Low Limit</label>
      <input type="text" class="form-control" name="validation_low_limit" value="{{ old('validation_low_limit', $test->validation_low_limit) }}">
    </div>
    <div class="form-group">
      <label for="validation_high_limit">Validation High Limit</label>
      <input type="text" class="form-control" name="validation_high_limit" value="{{ old('validation_high_limit', $test->validation_high_limit) }}">
    </div>
    <div class="form-group">
      <label for="default_low_warning">Default Low Warning Value</label>
      <input type="text" class="form-control" name="default_low_warning" value="{{ old('default_low_warning', $test->default_low_warning) }}">
    </div>
    <div class="form-group">
      <label for="default_high_warning">Default High Warning Value</label>
      <input type="text" class="form-control" name="default_high_warning" value="{{ old('default_high_warning', $test->default_high_warning) }}">
    </div>
    <div class="form-group">
      <label for="comments">Comments</label>
      <input type="text" class="form-control" name="comments" value="{{ old('comments', $test->comments) }}">
    </div>
  </form>
</div>
@stop
