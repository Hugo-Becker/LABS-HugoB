<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ValidatorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isWebmaster']);

    }
    public function index()
    {
        $all=User::all();
        $users=$all->where('validate',0);

        return view('backend.validate',compact(
            'users'
        ));
    }

    public function validateUser($id)
    {

        $user=User::find($id);

        $user->validate=1;

        $user->save();

        return redirect()->back();



    }
}
