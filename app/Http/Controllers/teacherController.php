<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('can:teacher.grade.subjects')->only('create'); 
    }


    public function index()
    {
        //$teacher = DB::table('users')->get();
        $teacher = DB::table('users')->paginate(7);
        return view('teacher.index', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = session('id');
        $teacherSubject = DB::table('materias')
        ->join('teachersubject', 'teachersubject.idSubject', '=', 'materias.id')
        ->where('teachersubject.idTeacher', '=', $id)
        ->get();
        //dump($teacherSubject);  
        
        if(isset($_GET['cuatri']) && $_GET['cuatri'] != 0 && $_GET['search'] == "1")
        {
            $student = DB::table('alumnoMateria')
            ->join('users', 'alumnoMateria.idAlumno', '=', 'users.id')
            ->where('alumnoMateria.idMateria', '=', $_GET['cuatri'])
            ->get();
        } else {
            $student[0] = 0;
        }
        return view('teacher.create', compact('teacherSubject', 'student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        $grade = $request->input('calif');
        $cuatri = $request->input('cuatri');

        if(isset($cuatri) && array_filter($grade) != [])
        {

        
            foreach($id as $key => $val)
            {
                if($grade[$key] != null)
                {
                    DB::table('alumnoMateria')
                    ->where('idMateria', '=', $cuatri)
                    ->where('idAlumno', '=', $val)
                    ->update(['calif' => $grade[$key]]);
                }

                
            }
            return redirect()->route('teacher.create', 'ok');
        }
        return redirect()->route('teacher.create', 'err');
        dump($request->calif, $request->id, $request->cuatri);
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
    public function edit($id)
    {
        $subjects = DB::table('materias')->get();
        $users = DB::table('users')->where('id', '=', $id) -> first();
        $teacher = DB::table('materias')
        ->join('teachersubject', 'teachersubject.idSubject', '=', 'materias.id')
        ->where('teachersubject.idTeacher', '=', $id) -> get();
        //dump($subjects, $users, $teacher);

        if(isset($_GET['save']) && $_GET['save'] == "1" && !empty($_GET['IdSub']))
        {
            foreach($_GET['IdSub'] as $subject)
            {
                $resp = $teacher->where('idSubject', $subject) -> first();
                if(!$resp)
                {
                    DB::table('teachersubject')->insert([
                        'idTeacher' => $id,
                        'idSubject' => $subject,
                    ]);
                }
            }
        }

        if( isset($_GET['deleted']) && $_GET['deleted'] == "1" && !empty($_GET['IdSub']))
        {
            foreach($_GET['IdSub'] as $subject)
            {
                DB::table('teachersubject')
                ->where('id', '=', $subject)
                ->delete();
            }
        }
        return view('teacher.edit', compact('subjects', 'users', 'teacher'));
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
