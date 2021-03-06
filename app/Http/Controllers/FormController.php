<?php

namespace App\Http\Controllers;

use App\Mail\FromMail;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

use App\Mail\NewsletterMail;
use App\Models\Subscriber;


use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $request->validateWithBag('witness',[
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required'
        // ]);


   


        // // Return + msg
        // $route = URL::previous();
        // return redirect($route.'#formQueries')->with('success', 'Email send!');
        $prevUrl = URL::previous();


        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject'=>'required'

        ]);

        $subjects=Subject::all()->pluck('id')->toArray();


     

        if (in_array($request->subject,$subjects)) {

            if ($validator->fails()) {
                return redirect($prevUrl.'#form')
                            ->withErrors($validator)
                            ->withInput();
            }

            $sub=Subject::find($request->subject)->name;

            // dd($sub);
    
            Mail::to('becker.hugo@hotmail.com')->send(new FromMail([$request,$sub]));
    
            return redirect($prevUrl.'#form')->with('success','Your message has been successfully sent!');

        }
        else{

            return redirect($prevUrl.'#form')->with('error','Choose from the selected subject ');

        }







       
        // $route = URL::previous();
        // return redirect($route.'#formQueries');
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
        //
    }
}
