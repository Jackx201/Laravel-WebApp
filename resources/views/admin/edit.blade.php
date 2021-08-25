{{-- This was moved from create to edit --}}
<h1 style="text-align: center">Assign subjects to students</h1>
@extends('layouts.plantilla')
@section('content')

<div class="container col-md-8" style="margin-top: 2%">
    <h2 style="text-align: center">Assigning subjects to: {{$user->name}}</h5>
</div>


<div class="container col-md-8" style="margin-top: 2%">
    <div class="card">
        <form action="" method="get">

            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="" class="input-group-text">Select course</label>
                </div>
            </div>

            <select class="custom-select" name="cuatri" id="">
                <option selected value="0"> Select a course </option>
                <option value="1"> 1st </option>
                <option value="2"> 2nd </option>
                <option value="3"> 3rd </option>
                <option value="4"> 4th </option>
            </select>
            <button type="submit" class="btn">Search</button>
        </form>

        <div class="card-body">
            
            <table class="table table-striped">
                <thead>
                    <th>Quarter</th>
                    <th>Name</th>
                </thead>
                <tbody>
                    @foreach ($materias as $m)
                        <tr>
                            <td>{{$m->cuatri}}</td>
                            <td>{{$m->materia}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>Quarter</th>
                    <th>Name</th>
                </thead>
                <tbody>
                    @foreach ($subjects as $m)
                        <tr>
                            <td>{{$m->cuatri}}</td>
                            <td>{{$m->materia}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <form action="" method="get">
                @if (isset($_GET['cuatri']))
                <input type="hidden" name="cuatri" value={{$_GET['cuatri']}}>
                @endif
                <input type="hidden" name="save" value="si">
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>


    </div>
</div>
@stop