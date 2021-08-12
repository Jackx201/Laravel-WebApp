@extends('layouts.plantilla')
@section('content')

<div class="card">
    <div class="card-body">
        <h1>Permissions</h1>

        <div class="card-header">
            <form action="" method="get" class="row g-3">
                <div class="col-auto">
                    <input type="text" name="data" class="form-control" placeholder="Search user">
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-success" name="search" value="1">Search</button>
                </div>
                
            </form>
        </div> {{-- End Card Header --}}
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $usrs)
                <tr>
                    <th>{{$usrs->id}}</th>
                    <th>{{$usrs->name}}</th>
                    <th>{{$usrs->email}}</th>
                    <th> <a class="btn btn-success" href="{{route('users.edit', $usrs->id)}}">Save</a></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  {{-- End Card Body --}}
</div> {{-- End Card --}}


@stop