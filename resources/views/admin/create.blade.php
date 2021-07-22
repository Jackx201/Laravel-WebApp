{{-- Modified --}}
 @extends('layouts.plantilla')
 @section('content')
 <div class="container col-md-8">
     <h1 style="text-align: center; margin: 5%;">Students</h1>
     <div class="card">
         <div class="card-body">
            <table class="table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th></th>
                    </tr>
                    <tbody>
                        {{-- Get Students --}}
                        @foreach ($students as $st)
                            <tr>
                                <th> {{$st -> id}} </th>
                                <th> {{$st -> name}} </th>
                                <th> {{$st -> email}} </th>
                                <th width="3%">
                                    {{-- We send the id of the selected student to Admin.edit --}}
                                    <a href=" {{route('admin.edit', $st->id)}}" class="btn btn-success">Asign</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
         </div> {{-- End Card-Body --}}
     </div> {{-- End Card --}}
</div>
 @stop