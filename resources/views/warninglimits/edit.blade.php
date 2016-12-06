
@extends('layouts.master')
@section('navbarSection')
@include('includes.warningLimitsNavbar')
@stop
@section('pageContentSection')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading panel-title">Warning Limit</div>
        <div class="panel-body">

          <form method='POST' action='/warninglimits/{{ $warningLimit->id }}'>
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="panel-heading">
              <button type="submit" class="btn btn-success btn-xs">
                <span class="fa fa-save"></span>Save
              </button>
              <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('warninglimits.index') }}">
                <span class="fa fa-rotate-left"></span>Cancel
              </a>
            </div>
            <div class="form_container">
              <!-- Using Susan's shorthand one-liner to set selected value  -->
              <div class="form-group">
                <label for="test_id">Test</label>
                <select name="test_id" class="form-control">
                  @foreach($testList as $test_id => $name)
                  <option value="{{ $test_id }}" {{ ($warningLimit->test_id == $test_id) ? "SELECTED" : '' }}>
                    {{ $name }}
                  </option>
                  @endforeach
                </select>
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
        </div>
      </div>
    </div>
  </div>
</div>
@stop
