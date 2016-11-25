
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

<div class="control_section">
    <button type="button" class="btn btn-success btn-sm">
        <span class="fa fa-plus-circle"></span> New
    </button>
</div>

<table class="table-bordered table-striped">
    <tbody>
        <thead>
            <tr>
                <td> </td>
                <td>Test</td>
                <td>Units</td>
                <td>Validation Low Limit</td>
                <td>Validation High Limit</td>
                <td>Default Low Warning</td>
                <td>Default High Warning</td>
                <td>Comments</td>
                <td> </td>
            </tr>
        </thead>

        @foreach($tests as $test)
        <tr>
            <td>
                <button type="button" class="btn btn-info btn-xs">
                    <span class="fa fa-pencil-square-o"></span> Edit
                </button>
            </td>
            <td>{{ $test->name }}</td>
            <td>{{ $test->units }}</td>
            <td>{{ $test->validation_low_limit }}</td>
            <td>{{ $test->validation_high_limit }}</td>
            <td>{{ $test->default_low_warning }}</td>
            <td>{{ $test->default_high_warning }}</td>
            <td>{{ $test->comments }}</td>
            <td>
                <button type="button" class="btn btn-danger btn-xs" onclick="window.location='{{ route("users.index") }}'>
                    <span class="fa fa-minus-circle"></span> Delete
                </button>
            </td>
            <td>
                <a href="{{ URL::route('users.index') }}">My button</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@stop
