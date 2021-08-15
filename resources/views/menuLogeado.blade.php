@extends('layouts.plantilla')
<link rel="stylesheet" href="resources\css\menulog.css">
<h1 style="text-align: center; margin: 1%">Welcome</h1>
@section('content')

<div class="container col-md-8">



<div class="card" style="text-align: center; margin-top: 3%; margin-bottom: 3%">
    <h1>{{$user->name}}</h1>
</div>
@can('student.subjects')

    <div class="card-header" style="text-align: center">
        My grades
    </div>

    <div class="card">
        <div class="card-body">
        
            

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th style="text-align: center">Grade</th>
                        <th>Teacher</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($materias as $st)
                        <tr>
                            <th>{{$st->materia}}</th>
                            <th style="text-align: center">{{$st->calif}}</th>
                            <th>{{$st->name}}</th>
                            {{-- @foreach ($teacher as $t)
                            <th>{{$t->name}}</th>
                            @endforeach --}}
                            
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div> {{-- End Card Body --}}
    </div> {{-- End Card --}}
</div>

@endcan
@stop