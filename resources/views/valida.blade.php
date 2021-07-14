@extends('layouts.plantilla')
<h1 style="text-align: center; margin: 1%">Data validation</h1>
@section('content')
<div class="container col-md-4" style="margin-top: 2%">
<p> The user is: {{$usuario->name}} </p>
<hr>
<p>The user was created at: {{$usuario->created_at}}</p>
<hr>
<p>The remember token is: {{$usuario->remember_token}}</p>
<hr>
<p>The e-mail was verified in: {{$usuario->email_verified_at}}</p>
<hr>
<p>The current password is: {{$usuario->password}}</p>
<hr>
</div>
@stop