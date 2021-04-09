@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
<link rel="stylesheet" href="{{ asset('css/styleBack.css') }}" />
	<!-- Testimonial section -->
	<div class="testimonial-section py-3">
		<div class="overlay"></div>
		<div style="z-index: 0 !important;" class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">

                        <form method="POST" action="/titles/2">

                            @method('PUT')
                            @csrf
							<label class="text-light" for="">Title : </label>
							<input class="form-control mb-4" name="name" value="{{$titles[2]->name}}" type="text">
							<button class="site-btn" type="submit">Update</button>
							@if ($errors->any()) 
<div class="alert alert-danger"> 
<ul> @foreach ($errors->all() as $error) 
<li>{{ $error }}</li> 
@endforeach </ul> 
</div> 
@endif
                    
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
										<button class="btn btn-success btn-sm">Edit</button>
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

	<div class="container my-5 py-5">
		@if ($errors->any()) 
<div class="alert alert-danger"> 
<ul> @foreach ($errors->all() as $error) 
<li>{{ $error }}</li> 
@endforeach </ul> 
</div> 
@endif

		<h1 class="title" >Add a testimonial</h1>
		<form class="my-5" action="/testimonials" method="POST">
			@csrf

			<div class="form-group">
				<label for="">Name :</label>
				<input name="name" type="text" class="form-control">
			</div>

			<div class="form-group">
				<label for="">From :</label>
				<input name="from" type="text" class="form-control">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Text</label>
				<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>

			<button type="submit" class="btn btn-success">Add</button>

		</form>
	</div>
    
	<!-- Testimonial section end-->


@stop
