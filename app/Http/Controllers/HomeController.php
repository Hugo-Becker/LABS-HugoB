<?php

namespace App\Http\Controllers;

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
use App\Models\User;
use Database\Seeders\AboutSeeder;
use Database\Seeders\MemberSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $titles;
    public $sliders;
    public $services;
    public $abouts;
    public $testislides;
    public $membres;
    
    public function index()
    {

        $logo=Logo::all();
        $titles=Title::all();
        $sliders=Slider::all();
        $services=Service::all();

        $serv=Str::of($titles[3]->name)->replace('(', '<span>');
        $serviceTitle = Str::of($serv)->replace(')', '</span>');

        $abouts=About::all();        // $aboutTitle=explode('/',$abouts[0]->title);
        $abt=Str::of($abouts[0]->title)->replace('(', '<span>');
        $aboutTitle=Str::of($abt)->replace(')', '</span>');
        
        $testislides=Testislide::all();
        $members=Member::all();

        $teamTitle=Str::of($titles[1]->name)->replace('(', '<span>')->replace(')','</span>');

        $contacts=Contact::all();
        $adresses=ContactAdress::all();
        $phones=ContactPhone::all();
        $mails=ContactMail::all();
        $footer=Footer::all();
        $users=User::all();
        $boss=User::where('poste_id',1)->get()[0];
        $subjects=Subject::all();

        // dd($boss[0]);






        return view('pages.home',compact(

            'logo',
            'titles',
            'sliders',
            'services',
            'serviceTitle',
            'abouts',
            'aboutTitle',
            'testislides',
            'members',
            'teamTitle',
            'contacts',
            'adresses',
            'phones',
            'mails',
            'footer',
            'users',
            'boss',
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
