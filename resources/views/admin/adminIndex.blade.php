<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Admin Larastore</title>
</head>
<body>
    <div class="card-header">
        This is where the admin will redirect after logging in</div>
    <div class="card-body">
       <p class="card-text"> Dashboard siguro lalagay dito basta CRUD andito </p>


      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ __('Logout')}}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @crsf
      </form>
    </div>
    </div>
</body>
</html>

