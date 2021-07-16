@extends('layouts.plantilla')
<h1 style="text-align: center; margin: 1%">Database</h1>
@section('content')

<div class="container col-md-4" style="margin-top: 2%">
    <h2>All Users:</h2>
@foreach ($data as $d)
    <li>{{$d->id}} - {{$d->name}}</li>
@endforeach
</div>

@stop
{{-- <h1>Arquímidez
    
</h1>


<h5> The name is: {{$nom}} </h5>

@if ($grade >= 8)
    <p>The student passed the subject! </p>
@else
    <p> The student FAILED the subject! </p>    

@endif

@dump($mats); 

<hr>
<h1>FOREACH</h1>
@foreach ($mats as $mat)
    
    <h4> Las materias son: {{$mat}} </h4>

@endforeach

<hr>
<h1>WHILE LOOP</h1>
@while ($num <= 3)
    <p> The number is: {{$num}} </p>
    {{$num++}}
@endwhile --}}