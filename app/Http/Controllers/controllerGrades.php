<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controllerGrades extends Controller
{
    //
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

        $credencials = $request->only('email', 'password');
        // dump ($credencials);
        // die();

        
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

    public function registro()
    {
        return view('registro');
    }

    public function guardar(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        die("Usuario Guardado");
        die();
    }

    public function menulog(Request $request)
    { 
        //Llamar sesion
        $id = session('id');
        $user = DB::table('users')->where('id', '=', $id)->first();
        //dump($user);

                $materias = DB::table('materias')
                ->join('alumnoMateria', 'alumnoMateria.idMateria', '=', 'materias.id')
                ->where('alumnoMateria.idAlumno', '=', $user->id)->get();
                dump($user);
                return view('menuLogeado');
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