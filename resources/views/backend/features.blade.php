@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
<link rel="stylesheet" href="{{ asset('css/styleBack.css') }}" />

    	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$serviceTitle[0]}}<span>{{$serviceTitle[1]}}</span>{{$serviceTitle[2]}}</h2>
				<form method="POST" action="/titles/5">

                    @method('PUT')
                    @csrf
                    <label class="text-light" for="">Title : </label>
                    <input class="mt-4" style="width: 500px" name="name" value="{{$titles[5]->name}}" type="text">
                    <p style="color: rgba(255, 255, 255, 0.699)">Write inside "/" for highlighted text</p>
                    <button class="site-btn" type="submit">Update title</button>
            
                </form>
                {{-- <h1>TITRE</h1> --}}
			</div>
			<div class="row">
				<!-- feature item -->
				
				<div class="col-md-4 col-sm-4 features">
					@foreach ($lastSixServices as $key => $service)

						@if ($loop->iteration<=3)

							<div class="icon-box light left">
								<div class="service-text">
									<h2>{{$service->title}}</h2>
									<p>{{$service->text}}</p>
								</div>
								<div class="icon">
									<i class="{{$service->icon}}"></i>
								</div>
							</div>

						@endif
						
						

						@if ($loop->iteration==3)

							</div>
							<div class="col-md-4 col-sm-4 devices">
								<div class="text-center">
									<img src="img/device.png" alt="">
								</div>
							</div>
							<div class="col-md-4 col-sm-4 features">

						@endif


						@if ($loop->iteration>3)

							<div class="icon-box light right">
								<div class="icon">
									<i class="{{$service->icon}}"></i>
								</div>
								<div class="service-text">
									<h2>{{$service->title}}</h2>
									<p>{{$service->text}}</p>
								</div>
							</div>

						@endif
				
					@endforeach
				
					</div>
				</div>
			</div>
	
		</div>
	</div>
	<!-- features section end-->
@stop
