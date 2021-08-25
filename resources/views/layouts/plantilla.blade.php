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
      <a class="navbar-brand" href="{{route('index')}}">Oakwood</a>
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
          @can('student.subjects')  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Student: {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('menulog')}}">My grades</a>
            </div>
          </li>
          {{-- Dropdown  List for student --}}
          @endcan


          {{-- Dropdown List for Admin--}}
          @can('admin.assign.subjects.teacher')
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Admin: {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @can('admin.add.user')
              <a class="dropdown-item" href="{{route('admin.index')}}">Add User</a>
              @endcan
              @can('admin.assign.subjects.teacher')
              <a class="dropdown-item" href="{{route('teacher.index')}}">Assign Subjects to teachers</a>
              @endcan
              @can('admin.assign.subjects.student')
              <a class="dropdown-item" href="{{route('admin.create')}}">Assign Subjects to students</a>
              @endcan
              @can('admin.assign.permission')
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('users.index')}}">Permissions</a> 
              <a class="dropdown-item" href="{{route('grades')}}">Users</a> 
              <a class="dropdown-item" href="{{route('materias')}}">Subjects</a> 
              @endcan
            </div>
          </li>
          @endcan
          {{-- Dropdown  List for Admin --}}

          {{-- Dropdown List for Teachers--}}

          @can('teacher.grade.subjects')
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Teacher: {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('teacher.create')}}">Grade</a>
            </div>
          </li>
          {{-- Dropdown  List for Teachers --}}
          @endcan
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('logout')}}">Logout</a>
          </li>
          @endguest
          
        </ul>
      </div>
    </div>
  </nav>
  @show    
<div class="container">
  @section('content')      
  @show
</div>
  @section('footer')
      <!-- Footer -->
<footer class="page-footer font-small purple pt-4" style="margin-top: 5%">  
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <a class="text-reset fw-bold" href="https://jackx201.github.io/">© Zahúl Guadalupe Domínguez Chávez 2021 </a>
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