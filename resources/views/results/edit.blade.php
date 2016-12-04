
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
              <div class="form-group">
                <input name="id" value="{{ $result->id }}" type="hidden">
                <label for="test_id">Test ID</label>
                <input type="text" class="form-control" name="test_id" value="{{ old('test_id', $result->test_id) }}">
              </div>
              <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" class="form-control" name="user_id" value="{{ old('user_id', $result->user_id) }}">
              </div>
              <div class="form-group">
                <label for="result_date">Result Date</label>
                <input type="text" class="form-control" name="result_date" value="{{ old('result_date', $result->result_date) }}">
              </div>
              <div class="form-group">
                <label for="value">Value</label>
                <input type="text" class="form-control" name="value" value="{{ old('value', $result->value) }}">
              </div>
              <div class="form-group">
                <label for="result_date">Comments</label>
                <input type="text" class="form-control" name="comments" value="{{ old('comments', $result->comments) }}">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
