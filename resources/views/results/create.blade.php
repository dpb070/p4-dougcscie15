
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

          <form method='POST' action='/results'>
            {{ csrf_field() }}
            <div class="panel-heading">
              <button type="submit" class="btn btn-success btn-xs">
                <span class="fa fa-save"></span>Save
              </button>
              <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('results.index') }}">
                <span class="fa fa-rotate-left"></span>Cancel
              </a>
            </div>

            <div class="form-group">
              <label for="test_id">Test</label>
              <select name="test_id" class="form-control">
                @foreach($testList as $test_id => $name)
                <option value="{{ $test_id }}">{{ $name }}</option>
                  @endforeach
                </select>
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

        </div>
      </div>
    </div>
  </div>
</div>
@stop
