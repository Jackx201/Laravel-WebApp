<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role; 
use App\Models\User;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['data']) && !empty($_GET['data']) && $_GET['search'] == "1")
        {
            $users = DB::table('users') 
            ->select('id', 'name', 'email')
            ->where('name', 'LIKE', '%'.trim($_GET['data']).'%')
            ->orWhere('email', 'LIKE', '%'.trim($_GET['data']).'%') 
            ->orWhere('id', 'LIKE', '%'.trim($_GET['data']).'%')
            ->paginate(5);    
            return view('admin.users.index', compact('users')); 
        }



        $users = DB::table('users')->select('id', 'name', 'email')->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $roles = Role::all();
        $usr = DB::table('users')->select('id','name')->where('id', '=', $id)->first();
        return view('admin.users.edit', compact ('roles', 'usr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roleId);
        return redirect()->route('users.edit', $user)
        ->with('info', 'The role was assigned correctly');
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
