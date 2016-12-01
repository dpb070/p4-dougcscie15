
@extends('layouts.master')
@section('navbarSection')
@include('includes.warningLimitsNavbar')
@stop
@section('pageContentSection')


<form method='POST' class="form-horizontal" action='/warninglimits/{{ $warningLimit->id }}'>
  {{ csrf_field() }}
  {{ method_field('PUT')}}
  <div class="control_section">
    <button type="submit" class="btn btn-success btn-xs">
      <span class="fa fa-save"></span>Save
    </button>
    <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('warninglimits.index') }}">
      <span class="fa fa-rotate-left"></span>Cancel
    </a>
  </div>
  <div class="form_container">
    <div class="form-group">
      <input name="id" value="{{ $warningLimit->id }}" type="hidden">
      <label for="test_id">Test ID</label>
      <input type="text" class="form-control" name="test_id" value="{{ old('test_id', $warningLimit->test_id) }}">
    </div>
    <div class="form-group">
      <label for="user_id">User ID</label>
      <input type="text" class="form-control" name="user_id" value="{{ old('user_id', $warningLimit->user_id) }}">
    </div>
    <div class="form-group">
      <label for="low_warning">Low Warning</label>
      <input type="text" class="form-control" name="low_warning" value="{{ old('low_warning', $warningLimit->low_warning) }}">
    </div>
    <div class="form-group">
      <label for="high_warning">High Warning</label>
      <input type="text" class="form-control" name="high_warning" value="{{ old('high_warning', $warningLimit->high_warning) }}">
    </div>
  </form>
</div>
@stop
