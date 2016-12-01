
@extends('layouts.master')
@section('navbarSection')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header navbar-brand">
            HealthTrack
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/tests">Tests</a></li>
            <li class="active"><a href="/results">Results</a></li>
            <li><a href="/users">Users</a></li>
            <li><a href="/warninglimits">Warning Limits</a></li>
        </ul>
    </div>
</nav>
@stop
@section('pageContentSection')
@include('test')
<div class="control_section">
    <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('results.create') }}">
        <span class="fa fa-plus-circle"></span> New
    </a>
</div>

<table class="table-bordered table-striped">
    <tbody>
        <thead>
            <tr>
                <td> </td>
                <td>Test ID</td>
                <td>User ID</td>
                <td>Result Date</td>
                <td>Value</td>
                <td>Comments</td>
            </tr>
        </thead>

        @foreach($results as $result)
        <tr>
            <td>
                <a class="btn btn-info btn-xs" role="button" {{ $tableButtonState }} href="/results/{{ $result->id }}/edit">
                    <span class="fa fa-pencil-square-o"></span> Edit
                </a>
            </td>
            <td>{{ $result->test_id }}</td>
            <td>{{ $result->user_id }}</td>
            <td>{{ $result->result_date }}</td>
            <td>{{ $result->value }}</td>
            <td>{{ $result->comments }}</td>
            <td>
              <a class="btn btn-danger btn-xs" role="button" {{ $tableButtonState }} href="/results/{{ $result->id }}/delete">
                <span class="fa fa-minus-circle"></span> Delete
              </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@stop
