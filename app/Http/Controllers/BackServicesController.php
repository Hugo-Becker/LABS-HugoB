<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\ContactAdress;
use App\Models\ContactMail;
use App\Models\ContactPhone;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Icon;
use App\Models\Logo;
use App\Models\Member;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testislide;
use App\Models\Title;


use Illuminate\Support\Facades\DB;

class BackServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles=Title::all();
        $services=Service::all();
        $serviceTitle=explode('/',$titles[3]->name);
        return view('backend.services',compact(
            'services',
            'serviceTitle',
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
        $icons=Icon::all();
        $services=Service::all();
        return view('backend.creates.createService',compact(
            'icons',
            'services'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store=new Service;
        $store->title=$request->title;
        $store->text=$request->text;
        $store->icon=$request->icon;
        $store->save();
        return redirect('/backservices');



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
        $service=Service::find($id);
        $icons=Icon::all();
        return view('backend.edits.editService',compact(
            'service',
            'icons'
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
        $update=Service::find($id);
        $update->title=$request->title;
        $update->text=$request->text;
        $update->icon=$request->icon;
        $update->save();
        return redirect('/backservices');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Service::find($id);
        $delete->delete();
        return redirect('/backservices');



    }
}
