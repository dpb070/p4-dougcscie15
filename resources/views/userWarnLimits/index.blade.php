
@extends('layouts.master')
@section('navbarSection')
@include('warningLimitsNavbar')
@stop
@section('pageContentSection')

<div class="control_section">
    <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('userWarnLimits.create') }}">
        <span class="fa fa-plus-circle"></span> New
    </a>
</div>

<table class="table-bordered table-striped">
    <tbody>
        <thead>
            <tr>
                <td> </td>
                <td>Name</td>
                <td>Password</td>
                <td>Email</td>
                <td>Role</td>
                <td> </td>
            </tr>
        </thead>

        @foreach($userWarnLimits as $userWarnLimit)
        <tr>
            <td>
                <a class="btn btn-info btn-xs" role="button" {{ $tableButtonState }} href="/userWarnLimits/{{ $userWarnLimit->id }}/edit">
                    <span class="fa fa-pencil-square-o"></span> Edit
                </a>
            </td>
            <td>{{ $userWarnLimit->name }}</td>
            <td>{{ $userWarnLimit->password }}</td>
            <td>{{ $userWarnLimit->email }}</td>
            <td>{{ $userWarnLimit->role }}</td>
            <td>
              <a class="btn btn-danger btn-xs" role="button" {{ $tableButtonState }} href="/userWarnLimits/{{ $userWarnLimit->id }}/delete">
                <span class="fa fa-minus-circle"></span> Delete
              </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@stop
