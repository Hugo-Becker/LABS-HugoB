<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\ContactAdress;
use App\Models\ContactMail;
use App\Models\ContactPhone;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Logo;
use App\Models\Member;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subject;
use App\Models\Testislide;
use App\Models\Title;

class ContactPageController extends Controller
{
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
        $logo=Logo::all();
        $subjects=Subject::all();




        return view('pages.contact',compact(
            'footer',
            'contacts',
            'adresses',
            'phones',
            'mails',
            'logo',
            'subjects'

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
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function show(ContactPage $contactPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactPage $contactPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactPage $contactPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactPage $contactPage)
    {
        //
    }
}
