 <!-- About section -->
 <div class="about-section">
     <div class="overlay"></div>
     <!-- card section -->
     <div class="card-section">
         <div class="container">
             <div class="row">
                 <!-- single card -->
                 @foreach ($services->random(3) as $service)
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$service->icon}}"></i>
                            </div>
                            <h2>{{$service->title}}</h2>
                            <p>{{$service->text}}</p>
                        </div>
                    </div>
                 @endforeach
            </div>
         </div>
     </div>
     
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
                 <a href="#team" class="site-btn">Browse</a>
             </div>
             <!-- popup video -->
             <div class="intro-video">
                 <div class="row">
                     <div class="col-md-8 col-md-offset-2">
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
 <!-- About section end -->
