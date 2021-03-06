<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Testislide;
use App\Models\Title;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
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
        $testislides=Testislide::all();
        $titles=Title::all();


        return view('backend.testimonials',compact(
            'testislides',
            'titles'
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
        $validation=$request->validate([

            "text"=>'required',
            "name"=>'required',
            "from"=>'required',
     

        ]);
        $store=new Testislide;


        $store->text=$request->text;
        $store->name=$request->name;
        $store->from=$request->from;
        $store->img="";

        $store->save();

        return redirect()->back();
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
        //
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

    }
}
