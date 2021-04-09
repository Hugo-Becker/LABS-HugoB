<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\ContactAdress;
use App\Models\ContactMail;
use App\Models\ContactPhone;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Member;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testislide;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
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
        
        $titles=Title::all();
        $abouts=About::all();
        // $aboutTitle=explode('/',$abouts[0]->title);
        $abt=Str::of($abouts[0]->title)->replace('(', '<span>');
        $aboutTitle=Str::of($abt)->replace(')', '</span>');
        

        return view('backend.About',compact(
            'aboutTitle',
            'abouts',
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
        $titles=Title::all();
        $abouts=About::all();
        $aboutTitle=explode('/',$abouts[0]->title);


        return view('backend.edits.editAbout',compact(
            'aboutTitle',
            'abouts'

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
        $abouts=About::all();
        $update=$abouts[0];
        $validation=$request->validate([
            "title"=>"required",
            "text1"=>"required",
            "text2"=>"required",
            "videoUrl"=>"required",

           
           ]);

        if ($request->hasFile(key:'videoCover')) {

            $videoCover=request()->file(key:'videoCover')->hashName();
            request()->file(key:'videoCover')->storeAs(path:'',name:$videoCover);
            $update->videoCover=$videoCover;


            # code...
        }

        


        $update->title=$request->title;
        $update->text1=$request->text1;
        $update->text2=$request->text2;
        $update->videoUrl=$request->videoUrl;

        $update->save();


        return redirect('/abouts');


        


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
