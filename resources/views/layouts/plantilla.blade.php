<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>School Database</title>
  </head>
  <body>
  @section('header')
      {{-- Aqui va un menu --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UTLag</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
          </li>

          @guest

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('log')}}">Login</a>
          </li>

          @else

          {{-- Dropdown List for student--}}

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('materias')}}">Materias</a>
              <a class="dropdown-item" href="{{route('grades')}}">Curso</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>

          {{-- Dropdown  List for student --}}

          {{-- Dropdown List for Admin--}}

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Admin: {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('admin.index')}}">Add User</a>
              <a class="dropdown-item" href="{{route('admin.create')}}">Assign Subjects</a>
              <a class="dropdown-item" href="http://127.0.0.1/phpmyadmin/index.php">Database</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('materias')}}">Subjects</a>
            </div>
          </li>
          {{-- Dropdown  List for Admin --}}

          {{-- Dropdown List for Teachers--}}

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Teacher: {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('teacher.index')}}">Assign Subjects to teach</a>
              <a class="dropdown-item" href="#">Grade</a>
              <a class="dropdown-item" href="#">Database</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Subjects</a>
            </div>
          </li>
          {{-- Dropdown  List for Teachers --}}

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('logout')}}">Logout</a>
          </li>
          @endguest
          
        </ul>
      </div>
    </div>
  </nav>
  @show    
<div class="row">
  @section('content')      
  @show
</div>
  @section('footer')
      <!-- Footer -->
<footer class="page-footer font-small purple pt-4"> 
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <a class="text-reset fw-bold" href="https://jackx201.itch.io/">© Zahúl Guadalupe Domínguez Chávez 2021 </a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>