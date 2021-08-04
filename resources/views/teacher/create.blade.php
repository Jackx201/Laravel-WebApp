@extends('layouts.plantilla')
@section('content')

<div class="container col-md-8">
    <div class="card">
        <div class="card-body">
            <h1>Grading Students</h1>

            @if(isset($_GET['ok']))

            <div class="alert alert-info" role="alert">
                Saved correctly
            </div>
            @elseif(isset($_GET['err']))
            <div class="alert alert-info" role="alert">
                At least 1 student must be graded.
            </div>
            @endif

            <form action="" method="get">
            <select class="form-select" name="cuatri" aria-label="Default select example">
                <option selected>Select a subject</option>
                @foreach ($teacherSubject as $tsub)
                    <option value={{$tsub->idSubject}}>{{$tsub->materia}}</option>
                @endforeach
              </select>
              <button type="submit" class="btn btn-success" name="search" 
              style="margin-top: 3%" value="1">Search</button>
            </form>
        </div> {{-- End Card Body --}}
    </div> {{-- End Card --}}

    <div class="card">
        <div class="card-body">
            <form action={{route('teacher.store')}} method="POST">
                @csrf
            

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Graded</th>
                    </tr>
                </thead>

                <tbody>
                    @if(!empty($student[0]))
                    @foreach ($student as $st)
                        <tr>
                            <th>{{$st->name}}</th>
                            <th>
                                <input type="hidden" name="id[]" value={{$st->id}}>
                                <input type="text" name="calif[]">
                                <input type="hidden" name="cuatri" value={{$_GET['cuatri']}}>
                            </th>
                            <th> <label for="">{{$st->calif}}</label> </th>
                        </tr>
                    @endforeach
                    @endif
                </tbody>

            </table>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
        </div> {{-- End Card Body --}}
    </div> {{-- End Card --}}

</div> {{-- End Container --}}
@stop