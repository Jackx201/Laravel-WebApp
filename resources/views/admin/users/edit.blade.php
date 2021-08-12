@extends('layouts.plantilla')
@section('content')

<div class="card">
    <h1>Show Roles</h1>

    <div class="card-header">
        User: {{$usr -> name}}
    </div>

    <div class="card-body">
        <form action="{{route('users.update', $usr->id)}}" method="post">
            @csrf
            @method('PUT')

            @foreach ($roles as $role)
            <div class="form-check">


                <input type="checkbox" class="form-chack-input" value="{{$role->id}}" name="roleId[]" id="flexCheckDefault">
                <label class="form-chack-label" for="flexCheckDefault">
                    {{$role->name}}
                </label>
            </div> {{-- End Form Check --}}
            @endforeach
            <button type="submit" class="btn btn-success">Assign Role</button>
        </form>
    </div>
</div>

@stop