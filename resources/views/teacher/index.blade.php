{{-- Modified --}}
@extends('layouts.plantilla')
@section('content')

<div class="row">
    <div class="col-sm-12">
    <h1 style="text-align: center; margin: 5%;">Assign a subject to a teacher</h1>
    <div class="card">
        <div class="card-body">
           <table class="table table-striped">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>E-Mail</th>
                       <th>Assign</th>
                   </tr>
                   <tbody>
                       {{-- Get Students --}}
                       @foreach ($teacher as $teach)
                           <tr>
                               <th> {{$teach -> id}} </th>
                               <th> {{$teach -> name}} </th>
                               <th class="text-break"> {{$teach -> email}} </th>
                               <th>
                                   {{-- We send the id of the selected student to Admin.edit --}}
                                   <a href=" {{route('teacher.edit', $teach->id)}}" class="btn btn-success">Asign</a>
                               </th>
                           </tr>
                       @endforeach
                   </tbody>
               </thead>
           </table>
        </div> {{-- End Card-Body --}}
    </div> {{-- End Card --}}

    <div class="card-footer">
        {{$teacher->links()}}
    </div>
</div>
</div>
@stop