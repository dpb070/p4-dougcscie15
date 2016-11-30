
@extends('layouts.master')
@section('navbarSection')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header navbar-brand">
            HealthTrack
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/tests">Tests</a></li>
            <li><a href="/results">Results</a></li>
            <li class="active"><a href="/users">Users</a></li>
        </ul>
    </div>
</nav>
@stop
@section('pageContentSection')

<div class="control_section">
    <a class="btn btn-success btn-xs" role="button" href="{{ URL::route('users.create') }}">
        <span class="fa fa-plus-circle"></span> New
    </a>
</div>

<table class="table-bordered table-striped">
    <tbody>
        <thead>
            <tr>
                <td> </td>
                <td>Name</td>
                <td>Email</td>
                <td>Role</td>
                <td> </td>
            </tr>
        </thead>

        @foreach($users as $user)
        <tr>
            <td>
                <a class="btn btn-info btn-xs" role="button" href="/users/{{ $user->id }}/edit">
                    <span class="fa fa-pencil-square-o"></span> Edit
                </a>
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
              <a class="btn btn-danger btn-xs" role="button" href="/users/{{ $user->id }}/delete">
                <span class="fa fa-minus-circle"></span> Delete
              </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@stop
