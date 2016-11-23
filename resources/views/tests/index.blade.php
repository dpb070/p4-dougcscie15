
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CSCIE-15 Project 4</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.override.css" rel="stylesheet">
  <link href="css/p4.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header navbar-brand">
        HealthTrack
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>

Hello
<table class="table-bordered table-striped">
    <tbody>
        @foreach($tests as $test)
        <tr>
            <td>{{ $test->name }}</td>
            <td>{{ $test->units }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


  <!-- @if (isset($firstName))
  <table>
    <thead>
      <tr>
        <td>First Name</td>
        <td>Last Name</td>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < $userCount; $i++)
      <tr>
        <td>{{ $firstName[$i] }}</td>
        <td>{{ $lastName[$i] }}</td>
      </tr>
      @endfor
    </tbody>
  </table>
  @endif -->

</body>
