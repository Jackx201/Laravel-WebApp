<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = DB::table('users')->get();

        return view('admin.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        return view('admin.index')->with('registro', 'si');
        //dd($request ->input('name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* * * * * * * * * * * *  * * * * * * * * * * *  */
    /* * * * * * * * * * * EDIT * * * * * * * * * *  */
    /* * * * * * * * * * * *  * * * * * * * * * * *  */
    /* * * * * * * * * * * *  * * * * * * * * * * *  */

    public function edit($id)
    {
        // Create -> Edit
        if(isset($_GET['cuatri']) && $_GET['cuatri'] !=0)
        {
            $materias = DB::table('materias')->where('cuatri', '=', $_GET['cuatri'])->get();

        } else {
            $materias = DB::table('materias')->get();
        }
        $subjects = DB::table('materias')
        ->join('alumnomateria', 'alumnomateria.idMateria', '=' ,'materias.id')
        ->where('alumnomateria.idAlumno', '=' ,$id) -> get();

        if(isset($_GET['cuatri']) && isset($_GET['save']) == "si"){
            $resp = $subjects->where('cuatri', $_GET['cuatri'])->first();
            if(!$resp){
                foreach($materias as $m)
                {
                    DB::table('alumnomateria')
                    ->insert([
                        'idAlumno' => $id,
                        'idMateria' => $m->id,
                        'letra' => 'A',
                        'calif' => '10',
                    ]);
                }
            }
        } else {
            //dump("Datos no guardados");
        }
        return view('admin.edit', compact('materias', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
