<h1 style="text-align: center">Menu Materias</h1>
@extends('layouts.plantilla')
@section('content')

<div class="container col-md-4" style="margin-top: 2%">

    <h2 style="text-align: center">Materias</h2>

<ul>

    @foreach ($materias as $materia)

    <li>
        {{$materia -> materia}} -- {{$materia -> cuatri}}
    </li>
        
    @endforeach

</ul>

</div>
@stop