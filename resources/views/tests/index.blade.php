
@extends('layouts.master')
@section('navbarSection')
@include('includes.testsNavbar')
@stop
@section('pageContentSection')

<div class="control_section">
    <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('tests.create') }}">
        <span class="fa fa-plus-circle"></span> New
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
                <a class="btn btn-info btn-xs" role="button" {{ $tableButtonState }} href="/tests/{{ $test->id }}/edit">
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
              <a class="btn btn-danger btn-xs" role="button" {{ $tableButtonState }} href="/tests/{{ $test->id }}/delete">
                <span class="fa fa-minus-circle"></span> Delete
              </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@stop
