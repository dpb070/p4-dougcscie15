<ul class="nav navbar-nav navbar-right">
    <!-- {{ dump($appUser->id) }} -->
    {{ dump(get_defined_vars()) }}
    <li><a href="/users">{{ $appUser->name or ' '}}</a></li>
    @if ( $appUser->role == 'ADMIN' )
        <li> <a href="/users">Users</a></li>
    @endif
    <li><a href="/logout">Logout</a></li>
</ul>
