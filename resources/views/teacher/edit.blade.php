@extends('layouts.plantilla')
@section('content')

    <div class="container col-md-10">
        <div class="card">
            <h1 style="text-align: center;">Assign Subjects: {{$users->name}}</h1>
            <div class="card-body">

                <form action="" method="get">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Quarter</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $sub)
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value={{$sub->id}} name="IdSub[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{$sub->materia}}
                                            </label>
                                        </div>
                                    </th>
                                    <th>{{$sub->cuatri}}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary" value="1" name="save">Save</button>
                </form>
            </div>            {{-- End Card-Body --}}
        </div>        {{-- End card --}}
    </div>     {{-- End Container --}}
@stop