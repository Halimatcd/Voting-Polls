<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class=" navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#"> BINCOM POLLING CENTER </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item text-white">
                    <a class="nav-link active text-white" href="/">Home</a>
                  </li>
              <li class="nav-item text-white">
                <a class="nav-link active text-white" href="/lga">Lga Results</a>
              </li>
              <li class="nav-item text-white">
                <a class="nav-link active text-white" href="/polling_units">All Polling Units</a>
              </li>
              <li class="nav-item text-white">
                <a class="nav-link active text-white" href="/partyList">Party List</a>
              </li>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link active text-white" href="/scores">All Scores</a>
            </li>
            <li class="nav-item text-white">
                <a class="nav-link active text-white" href="/createNewPu"> +Polling unit</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
@yield('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>