<nav class="navbar navbar-default">
    <div class="container-fluid">
        @include('includes.brandNavbar')
        <ul class="nav navbar-nav">
          <li><a href="/results">Results</a></li>
          <li class="active"><a href="/tests">Tests</a></li>
          <li><a href="/warninglimits">Warning Limits</a></li>
          <li><a href="/users">User Information</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
        @include('includes.rhNavbar')
    </div>
</nav>
