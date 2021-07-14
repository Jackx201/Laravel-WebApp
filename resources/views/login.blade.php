@extends('layouts.plantilla')
@section('content')
<h1 style="text-align: center">LOGIN</h1>

<div class="container col-md-4" style="margin-top: 2%">
    <h3>Login</h3>
    <form role="form" action="/valida" method="post" autocomplete="off">
    <div class="form-group">
        @csrf
    <label for="email" class="label" style="margin-top: 3%;">Usuario:</label>
    <input type="email" class="form-control" name="email" placeholder="Usuario" style="margin-top: 1%;">
    
    <label for="password" class="label" style="margin-top: 3%;">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Contraseña" style="margin-top: 1%;">
    
    </div>  
    
    <button style="margin-top: 5%;" type="Submit" class="btn btn-dark">Ingresar</button>

    </form>
    </div>
@stop