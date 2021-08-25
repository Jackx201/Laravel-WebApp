@extends('layouts.plantilla')
@section('content')
    

<h1 style="margin-top: 2%; margin-bottom: 2%; text-align: center">WELCOME</h1>

<div class="container" style="margin-bottom: 2%">
    <div class="container col-md-6">
        This is a prototype for a web application that serves as a school manager for teachers, students and administrators. There are three kinds of users for this application 
    </div>
</div>

<hr>

<div class="row">
    <div class="container col-md-4">
    

        <div class="container col-md-12">
            <h1 style="text-align: center">Student</h1>
            <p>Sign up as a Student and see the subjects you were assigned. You can keep track of your califications as well. If you don't have an account, ask to the administration for being provided with an E-Mail and a password. If you have any problem with your grades, talk to the teacher of the respective subject</p>
            <img src="{{ URL::to('/images/student.png') }}" class="img-fluid">    
    
        </div>
    </div>
    
    <div class="container col-md-4">
    
        <div class="container col-md-12">
            <h1 style="text-align: center">Teacher</h1>
            <p>Sign up as a teacher and keep an eye on the subjects and students that you are given. If you don't have an account, you don't have any subjects assigned or you can’t access to your subjects and the grades of your students, ask to the administration for technical support.</p>
            <img src="{{ URL::to('/images/teacher.png') }}" class="img-fluid">     
    
        </div>
    </div>
    
    <div class="container col-md-4">
    
        <div class="container col-md-12">
            <h1 style="text-align: center">Administrator</h1>
            <p>Sign up as an administrator and keep an eye on the permissions and roles that every user has in this application. Assign subjects to teachers (to be taught) and to students (to be taken). And add new users by giving them a username, an e-mail and a password.</p>
            <img src="{{ URL::to('/images/admin.png') }}" class="img-fluid">    
        </div>
    </div>
</div>

@stop

