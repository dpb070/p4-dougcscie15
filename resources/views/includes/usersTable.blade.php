<table class="table-bordered table-striped">
  <tbody>
    <thead>
      <tr>
        @if ($editButton)
        <td> </td>
        @endif      
        <td>Name</td>
        <td>Email</td>
        <td>Role</td>
        @if ($deleteButton)
        <td> </td>
        @endif
      </tr>
    </thead>

    @foreach($users as $user)
    <tr>
      @if ($editButton)
      <td>
        <a class="btn btn-info btn-xs" role="button" onclick="return {{ $tableButtonsEnabled }}" href="/users/{{ $user->id }}/edit">
          <span class="fa fa-pencil-square-o"></span> Edit
        </a>
      </td>
      @endif
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->role }}</td>
      @if ($deleteButton)
      <td>
        <a class="btn btn-danger btn-xs" role="button" onclick="return {{ $tableButtonsEnabled }}" href="/users/{{ $user->id }}/delete">
          <span class="fa fa-minus-circle"></span> Delete
        </a>
      </td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
