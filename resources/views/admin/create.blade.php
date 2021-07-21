<h1 style="text-align: center">Menu Materias</h1>
@extends('layouts.plantilla')
@section('content')

<div class="container col-md-7" style="margin-top: 2%">
    <div class="card">

        <form action="" method="get">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="" class="input-group-text">Select course</label>
                </div>
            </div>

            <select class="custom-select" name="cuatri" id="">
                <option selected value="0"> Select a course </option>
                <option value="2"> 2nd </option>
                <option value="5"> 5th </option>
            </select>
            <button type="submit">Search</button>
        </form>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>Cuatrimestre</th>
                    <th>Nombre</th>
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
                    <th>Cuatrimestre</th>
                    <th>Nombre</th>
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
        </div>

        <form action="" method="get">
            @if (isset($_GET['cuatri']))
            <input type="hidden" name="cuatri" value={{$_GET['cuatri']}}>
            @endif
            <input type="hidden" name="save" value="si">
            <button type="submit">Guardar</button>
        </form>
    </div>
</div>
@stop