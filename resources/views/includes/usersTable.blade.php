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
