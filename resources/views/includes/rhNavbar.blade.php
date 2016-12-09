<ul class="nav navbar-nav navbar-right">
    <li><a href="/users/{{ $appUser->id}}/edit">{{ $appUser->name or ' '}}</a></li>
    @if ( $appUser->role == 'ADMIN' )
        <li> <a href="/users">Users</a></li>
    @endif
    <li><a href="/logout">Logout</a></li>
</ul>
