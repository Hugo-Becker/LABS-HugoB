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
use App\Models\ServiceCard;
use App\Models\Slider;
use App\Models\Testislide;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FeatureController extends Controller
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
        $services=Service::all();
        $paginateServices= DB::table('services')->paginate(9);
        $contacts=Contact::all();
        $adresses=ContactAdress::all();
        $phones=ContactPhone::all();
        $mails=ContactMail::all();
        $footer=Footer::all();
        // $serviceTitle=explode('/',$titles[5]->name);
        $serv=Str::of($titles[3]->name)->replace('(', '<span>');

        $serviceTitle = Str::of($serv)->replace(')', '</span>');
        $lastId=$services->last()->id;
        $lastSixServices=$services->whereBetween('id',[($lastId-5),($lastId)]);
        $lastThreeServices=$services->whereBetween('id',[($lastId-2),($lastId)]);
        $serviceCards=ServiceCard::all();


        return view('backend.features',compact(

            'titles',
            'paginateServices',
            'serviceTitle',
            'lastSixServices',
            'lastThreeServices',
            'serviceCards',
            'contacts',
            'adresses',
            'phones',
            'mails',
            'footer',

            
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
