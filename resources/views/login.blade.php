@extends('layouts.plantilla')
@section('content')




<h1 style="text-align: center;">LOGIN</h1>

<div class="container col-md-6" style="margin-top: 2%">
    <h3>Login</h3>
    <form role="form" action="/valida" method="post" autocomplete="off">

    <div class="form-group">
        @if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
@endforeach
@endif
        @csrf
    <label for="email" class="label" style="margin-top: 3%;">Usuario:</label>
    <input type="email" class="form-control" name="email" placeholder="Usuario" style="margin-top: 1%;">
    
    <label for="password" class="label" style="margin-top: 3%;">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Contraseña" style="margin-top: 1%;">
    
    </div>  

    <p>
        <div class="mb-3" style="text-align: center;">
            <span class="captcha" style="">
                {!! captcha_img() !!}
            </span>
            <button id="reload" class="btn btn-success">Reload</button>
        </div>

        <div class="mb-3">
            <input type="text" name="captcha" id="captcha" class="form-control" placeholder="Captcha answer">
        </div>
    </p>
    
    <button style="margin-top: 5%;" type="Submit" class="btn btn-dark">Ingresar</button>

    </form>
    </div>
@stop