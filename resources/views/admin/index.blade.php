@extends('layouts.plantilla')
@section('content')

<div class="container col-md-4" style="margin-top: 2%">
    <h3>New User:</h3>
        @if (@isset($registro)&& $registro == 'si' )
            <div class="alert alert-primary" role="alert">
            The user was added succesfully!
            </div>
        @endif
    <form role="form" action="{{route('admin.store')}}" method="POST" autocomplete="off">
    <div class="form-group">
        @csrf

    <label for="name" class="label" style="margin-top: 3%;">Name:</label>
    <input type="name" class="form-control" name="name" placeholder="Name" style="margin-top: 1%;">

    <label for="email" class="label" style="margin-top: 3%;">E-Mail:</label>
    <input type="email" class="form-control" name="email" placeholder="example@domain.com" style="margin-top: 1%;">
    
    <label for="password" class="label" style="margin-top: 3%;">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Password" style="margin-top: 1%;">
    
    </div>  
    
    <button style="margin-top: 5%;" type="Submit" class="btn btn-dark">Add</button>

    </form>
    </div>

    @stop