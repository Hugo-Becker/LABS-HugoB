@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
<link rel="stylesheet" href="{{ asset('css/styleBack.css') }}" />

    	<!-- Intro Section -->
	{{-- <div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{asset('img/' . $logo[0]->img)}}" alt="">
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($sliders as $slide)
				<div style="height:600px !important;" class="item  hero-item " data-bg="{{asset('img/'.$slide->img)}}"><p style="font-size: 24px;
					color: #0b1033;
					margin-bottom: 0;
					padding-top: 580px;
                    " class="pCarrousel text-center">{{$slide->text}}</p></div>
			@endforeach

		</div>
	</div> --}}

    <div class="container">
        <div class="py-5">
            <form action="/logos/{{$logo[0]->id}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <img src="{{asset('img/' . $logo[0]->img)}}" alt="">
                <div class="input-group my-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input name="img" type="file" class="custom-file-input" id="inputGroupFile01">
                      <label class="custom-file-label" for="inputGroupFile01">Update logo</label>
                    </div>
                  </div>
                  <button class="btn btn-lg btn-success btn-block mt-5">Update</button>
            </form>
            <hr>
            <hr>
            <hr>




            @foreach ($sliders as $slide)
                <form method="POST" enctype="multipart/form-data" action="carousels/{{$slide->id}}" class="form-group">    
                    @csrf
                    @method('PUT')
                    <img width="300px" src="{{asset('img/'.$slide->img)}}" alt="">
                    <br>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                        <input name="img" type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Update cover</label>
                        </div>
                    </div>
                    <label for="">Text</label>
                    <input name="text" value="{{$slide->text}}" class="form-control" type="text">
                    <button class="btn btn-lg btn-success btn-block mt-5">Update</button>

                </form>
                <hr>
                <hr>
                <hr>
            @endforeach

        </div>
    </div>

    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    
@endsection