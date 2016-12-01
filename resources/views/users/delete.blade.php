
@extends('layouts.master')
@section('navbarSection')
@include('usersNavbar')
@stop
@section('pageContentSection')

<div class="control_section">
  <form method="POST" action="/users/{{ $userToDelete->id }}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <span class="action_msg">
      Delete
      <span class="imark">
      "{{ $userToDelete->name }}"
    </span>
  </span>
  <button type="submit" class="btn btn-info btn-xs">
    <span class="fa fa-check"></span>Yes
  </button>
  <a class="btn btn-info btn-xs" role="button" href="{{ URL::route('users.index') }}">
    <span class="fa fa-rotate-left"></span>No
  </a>
</form>
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

        @foreach($users as $user)
        <tr>
            <td>
                <a class="btn btn-info btn-xs" role="button" {{ $tableButtonState }} href="/users/{{ $user->id }}/edit">
                    <span class="fa fa-pencil-square-o"></span> Edit
                </a>
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
              <a class="btn btn-danger btn-xs" role="button" {{ $tableButtonState }} href="/users/{{ $user->id }}/delete">
                <span class="fa fa-minus-circle"></span> Delete
              </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@stop
