<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controllerGrades extends Controller
{
    // public function __construct()
    // {
    //    $this->middleware('can:student.subjects')->only('menulog'); 
    // }

    public function index()
    {
        return view('index');
    }

    public function app5th()
    {
        $data = DB::table('users')->get();
        return view('alumnos', compact('data'));
    }

    public function login()
    {
        return view('login');
    }

    public function validacion(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'captcha' => 'required|captcha',
        ]);

        $credencials = $request->only('email', 'password');

        if(Auth::attempt($credencials)){
        $usuario = DB::table('users')
        ->where('email', '=', $email)
        ->first();
        //Crear Sesiones
        session(['id' => $usuario->id]);

        return redirect(route('menulog'));

        } else {
            //El usuario no existe, mándalo al Login
            return redirect(route('log'));
        }
    }

    public function menulog(Request $request)
    { 
        //Llamar sesion
        $id = session('id');
        $user = DB::table('users')->where('id', '=', $id)->first();

        //dump($user);

                $materias = DB::table('materias')
                ->join('alumnoMateria', 'alumnoMateria.idMateria', '=', 'materias.id')
                ->join('teachersubject', 'teachersubject.idSubject', '=', 'materias.id')
                ->join('users', 'users.id', '=', 'teachersubject.idTeacher')
                ->where('alumnoMateria.idAlumno', '=', $user->id)->get();
                return view('menuLogeado', compact('user', 'materias'));
            }
    

    public function logout (Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect (route('log'));
    }

    public function materias()
    {
        $materias = DB::table('materias')->get();
        return view('materias', compact('materias'));
    }
}