 <!-- About section -->

@extends('adminlte::page')



@section('content')



<link rel="stylesheet" href="{{ asset('css/styleBack.css') }}" />

<div class="about-section py-5">
    <div class="overlay"></div>
    <!-- card section -->
   
    
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
             
                <h2>{{$aboutTitle[0]}}<span>{{$aboutTitle[1]}}</span> {{$aboutTitle[2]}}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{$abouts[0]->text1}}</p>
                </div>
                <div class="col-md-6">
                    <p>{{$abouts[0]->text1}}</p>
                </div>
            </div>
            <div class="text-center mt60">
                {{-- REDIRECT TO TEAM SECTION --}}
                <a style="" href="/abouts/0/edit" class="site-btn">EDIT</a>
            </div>
            <!-- popup video -->
            <div class="intro-video-back">
                <div class="row">
                    <div style="z-index:0;" class="col-md-8">
                        <img src="{{asset('img/'. $abouts[0]->videoCover)}}" alt="">
                        <a href="{{$abouts[0]->videoUrl}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- <div class="about-contant bg-dark py-3" >
    <div class="container">
        <div class="section-title">
            <h2>{{$aboutTitle[0]}}<span>{{$aboutTitle[1]}}</span> {{$aboutTitle[2]}}</h2>


        </div>
        <div class="row">
            <div class="col-md-6">
               
                <p>{{$abouts[0]->text1}}</p>



            </div>
            <div class="col-md-6">
                <p>{{$abouts[0]->text2}}</p>


            </div>
        </div>
    </div>
    <div class="intro-video d-flex justify-content-center">
        <div class="row">
            <div class="col-md ">
                <img src="{{asset('img/'. $abouts[0]->videoCover)}}" alt="">
                <a href="{{$abouts[0]->videoUrl}}" class="video-popup">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <a class="btn btn-success" href="">Edit</a>
    </div>

</div> --}}



   
@stop

 
