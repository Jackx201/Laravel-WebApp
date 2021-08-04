@extends('layouts.plantilla')
@section('content')

<div class="container col-md-8">
    <div class="card">
        <div class="card-body">
            <h1>Grading Students</h1>

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
                            <th></th>
                            <th> <label for="">{{$st->calif}}</label> </th>
                        </tr>
                    @endforeach
                    @endif
                </tbody>

            </table>

        </div> {{-- End Card Body --}}
    </div> {{-- End Card --}}

</div> {{-- End Container --}}
@stop