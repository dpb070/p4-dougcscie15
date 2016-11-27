
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
<form method="POST" action="/tests/{{ $testToDelete->id }}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    Delete {{ $testToDelete->name }}
    <button type="submit" class="btn btn-info btn-xs">
        <i class="fa fa-pencil-square-o"></i>Yes
    </button>
</form>
</div>

<div class="cancel_section">
<a class="btn btn-info btn-xs" role="button" href="{{ URL::route('tests.index') }}">
    <span class="fa icon-undo"></span>No
</a>
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
                <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('users.index') }}">
                    <span class="fa fa-pencil-square-o"></span> Edit
                </a>
            </td>
            <td>{{ $test->name }}</td>
            <td>{{ $test->units }}</td>
            <td>{{ $test->validation_low_limit }}</td>
            <td>{{ $test->validation_high_limit }}</td>
            <td>{{ $test->default_low_warning }}</td>
            <td>{{ $test->default_high_warning }}</td>
            <td>{{ $test->comments }}</td>
            <td>
              <a class="btn btn-danger btn-xs" role="button" href="/tests/{{ $test->id }}/delete">
                <span class="fa fa-minus-circle"></span> Delete
              </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@stop
