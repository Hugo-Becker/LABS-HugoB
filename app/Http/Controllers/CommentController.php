<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isWebmaster'])->except('store');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $comments=Comment::where('check',0)->get();
        $comments=Comment::all();

        return view('backend.validateComment',compact(
            'comments'
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

     public function validateCom($id)
     {

        $val=Comment::find($id);

        $val->check=1;

        $val->save();

        return redirect()->back();

     }







    public function store(Request $request, $id)
    {
 


        $store=new Comment;
        

        if (Auth::check()) {

            $validation=$request->validate([                "message"=>"required",
                "message"=>"required"
               
            ]);


            $store->content=$request->message;
            $store->user_id=Auth::id();
            $store->article_id=$id;
            $store->fromName=Auth::user()->name;
            $store->fromMail=Auth::user()->email;
            $store->check=0;
            


        } else {

            $validation=$request->validate([
                "email"=>"required",
                // "content"=>"required",
                "name"=>"required",
                "content"=>"required"
               
            ]);
            
            $store->content=$request->message;
            $store->user_id=null;
            $store->article_id=$id;
            $store->fromName=$request->name;
            $store->fromMail=$request->email;
            $store->check=0;

        }

            $store->save();


            return redirect()->back();
            // return redirect()->back('#comments');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d=Comment::find($id);

        $d->delete();

        return redirect()->back();

    }
}
