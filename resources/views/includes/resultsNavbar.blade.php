<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header navbar-brand">
      HealthTrack |{{ $user->name }}
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/results">Results</a></li>
      <li><a href="/tests">Tests</a></li>
      <li><a href="/warninglimits">Warning Limits</a></li>
      <li><a href="/users">User Information</a></li>
      <li><a href="/logout">Logout</a></li>
    </ul>
  </div>
</nav>
