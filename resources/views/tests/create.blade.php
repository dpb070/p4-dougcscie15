
@extends('layouts.master')
@section('navbarSection')
@include('includes.testsNavbar')
@stop
@section('pageContentSection')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading panel-title">Test</div>
        <div class="panel-body">

          <form method='POST' action='/tests'>
            {{ csrf_field() }}
            <div class="panel-heading">
              <button type="submit" class="btn btn-success btn-xs">
                <span class="fa fa-save"></span>Save
              </button>
              <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('tests.index') }}">
                <span class="fa fa-rotate-left"></span>Cancel
              </a>
            </div>
            <div class="form_container">
              <div class="form-group">
                <label for="name">Name</label> @include('includes.testsNameError')
                <input type="text" class="form-control" name="name" placeholder="test name" value="{{old('name')}}">
              </div>
              <div class="form-group">
                <label for="units">Units</label> @include('includes.testsUnitsError')
                <input type="text" class="form-control" name="units" placeholder="measurement units" value="{{old('units')}}">
              </div>
              <div class="form-group">
                <label for="validation_low_limit">Validation Low Limit</label> @include('includes.testsValidationLowLimitError')
                <input type="text" class="form-control" name="validation_low_limit" placeholder="entry low limit for results" value="{{old('validation_low_limit')}}">
              </div>
              <div class="form-group">
                <label for="validation_high_limit">Validation High Limit</label> @include('includes.testsValidationHighLimitError')
                <input type="text" class="form-control" name="validation_high_limit" placeholder="entry high limit for results" value="{{old('validation_high_limit')}}">
              </div>
              <div class="form-group">
                <label for="default_low_warning">Default Low Warning Value</label> @include('includes.testsDefaultLowWarningValueError')
                <input type="text" class="form-control" name="default_low_warning" placeholder="flag displayed results below this value" value="{{old('default_low_warning')}}">
              </div>
              <div class="form-group">
                <label for="default_high_warning">Default High Warning Value</label> @include('includes.testsDefaultHighWarningValueError')
                <input type="text" class="form-control" name="default_high_warning" placeholder="flag displayed results above this value" value="{{old('default_high_warning')}}">
              </div>
              <div class="form-group">
                <label for="comments">Comments</label>
                <input type="text" class="form-control" name="comments" placeholder="additional comments" value="{{old('comments')}}">
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@stop
