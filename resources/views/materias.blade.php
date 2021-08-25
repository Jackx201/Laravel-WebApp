{{-- Modified --}}
@extends('layouts.plantilla')
@section('content')

<div class="container col-md-12">
    <h1 style="text-align: center; margin: 5%;">Assign a subject to a teacher</h1>
    <div class="card">
        <div class="card-body">
           <table class="table table-striped">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Subject</th>
                       <th style="text-align: center">Quarter</th>
                       
                   </tr>
                   <tbody>
                       {{-- Get Students --}}
                       @foreach ($materias as $materia)
                           <tr>
                            <th> {{$materia -> id}} </th>
                               <th> {{$materia -> materia}} </th>
                               <th style="text-align: center"> {{$materia -> cuatri}} </th>

                           </tr>
                       @endforeach
                   </tbody>
               </thead>
           </table>
        </div> {{-- End Card-Body --}}
    </div> {{-- End Card --}}
</div>
@stop