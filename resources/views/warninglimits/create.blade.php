
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

          <form method='POST' action='/warninglimits'>
            {{ csrf_field() }}
            <div class="panel-heading">
              <button type="submit" class="btn btn-success btn-xs">
                <span class="fa fa-save"></span>Save
              </button>
              <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('warninglimits.index') }}">
                <span class="fa fa-rotate-left"></span>Cancel
              </a>
            </div>
            <div class="form_container">
              <div class="form-group">
                <label for="test_id">Test ID</label>
                <input type="text" class="form-control" name="test_id" placeholder="dropdown here" size="10">
              </div>
              <div class="form-group">
                <label for="low_warning">Low Warning</label>
                <input type="text" class="form-control" name="low_warning" placeholder="flag results below this value">
              </div>
              <div class="form-group">
                <label for="high_warning">High Warning</label>
                <input type="text" class="form-control" name="high_warning" placeholder="flag results above this value">
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@stop
