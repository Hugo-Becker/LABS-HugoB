@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
<link rel="stylesheet" href="{{ asset('css/styleBack.css') }}" />
	<!-- Testimonial section -->
	<div class="testimonial-section">
		<div class="overlay"></div>
		<div style="z-index: 0 !important;" class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">

                        <form method="POST" action="/titles/2">

                            @method('PUT')
                            @csrf
							<label class="text-light" for="">Title : </label>
							<input name="name" value="{{$titles[2]->name}}" type="text">
							<button class="site-btn" type="submit">Update</button>
                    
                        </form>
						<h2 class="mt-4">{{$titles[2]->name}}</h2>

                        
					</div>
                    
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($testislides as $slide)
							<div class="testimonial">
								<span>‘​‌‘​‌</span>
								<p>{{$slide->text}}</p>
								<div class="client-info">
									<div class="avatar">
										<img src="{{asset('img/avatar/'. $slide->img)}}" alt="">
									</div>
									<div class="client-name">
										<h2>{{$slide->name}}</h2>
										<p>{{$slide->from}}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
	</div>
    
	<!-- Testimonial section end-->


@stop
