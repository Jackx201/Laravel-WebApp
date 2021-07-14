<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
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

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('menulog')}}">Admin</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('registro')}}">Signup</a>
          </li>


          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('grades')}}">Curso</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('logout')}}">Logout</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('materias')}}">Materias</a>
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
<footer class="page-footer font-small purple pt-4 fixed-bottom"> 
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <a class="text-reset fw-bold" href="https://jackx201.itch.io/">© Zahúl Guadalupe Domínguez Chávez 2021 </a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>