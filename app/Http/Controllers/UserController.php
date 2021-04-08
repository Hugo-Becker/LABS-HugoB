<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isWebmaster']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();

        return view('backend.users',compact(
            'users'
        ));
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


        $user=User::find($id);
        $postes=Poste::all();
        $roles=Role::all();

        return view('backend.edits.editUser',compact(
            'user',
            'postes',
            'roles'
        ));

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
        $update=User::find($id);

        if (request()->hasFile(key:'img')) {

            $img=request()->file(key:'img')->hashName();
            request()->file(key:'img')->storeAs(path:'avatar', name:$img);
            $update->img=$img;
        }

        $update->name=$request->name;
        $update->email=$request->email;
        $update->description=$request->description;
        $update->poste_id=$request->poste_id;
        $update->role_id=$request->role_id;
        $update->name=$request->name;


        $update->save();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=User::find($id);

        $del->delete();

        return redirect('/users');
    }
}
