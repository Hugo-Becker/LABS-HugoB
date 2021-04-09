<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactAdress;
use App\Models\ContactMail;
use App\Models\ContactPhone;
use App\Models\Footer;
use Illuminate\Http\Request;

class BackContactController extends Controller
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
        $contacts=Contact::all();
        $adresses=ContactAdress::all();
        $phones=ContactPhone::all();
        $mails=ContactMail::all();
        $footer=Footer::all();

        return view('backend.contact',compact(
            'contacts',
            'adresses',
            'phones',
            'mails',
            'footer'
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
        $contacts=Contact::all();
        $adresses=ContactAdress::all();
        $phones=ContactPhone::all();
        $mails=ContactMail::all();
        $footer=Footer::all();

        return view('backend.edits.editContact',compact(
            'contacts',
            'adresses',
            'phones',
            'mails',
            'footer'
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
        $validation=$request->validate([
            "text"=>"required",
            "city"=>"required",
            "number"=>"required",
            "mail"=>"required",
            "url"=>"required",
            "name"=>"required",

           
           ]);
        
        $contacts=Contact::all();
        $adresses=ContactAdress::all();
        $phones=ContactPhone::all();
        $mails=ContactMail::all();
        $footer=Footer::all();

        $contacts[0]->text=$request->text;
        $adresses[0]->street=$request->street;
        $adresses[0]->city=$request->city;
        $phones[0]->number=$request->number;
        $mails[0]->mail=$request->mail;
        $footer[0]->url=$request->url;
        $footer[0]->name=$request->name;

        $contacts[0]->save();
        $adresses[0]->save();
        $phones[0]->save();
        $mails[0]->save();
        $footer[0]->save();


        return redirect('/backContacts');



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
