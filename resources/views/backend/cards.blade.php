@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
<link rel="stylesheet" href="{{ asset('css/styleBack.css') }}" />


	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				@foreach ($lastThreeServices as $key => $service)
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="{{asset('img/'. $serviceCards[($loop->iteration-1)]->img)}}" alt="">
						</div>
                        <form action="/cards/{{$loop->iteration}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label for="formFile" class="form-label">Update Image</label>
                                <input name="cardUrl" class="form-control" type="file" id="formFile">
                                <button class="mt-2 btn btn-success" type="submit">Update</button>
                            </div>

                        </form>
                        
						{{-- <div class="card-text">
							<h2>{{$service->title}}</h2>
							<p>{{$service->text}}</p>
						</div> --}}
                        
					</div>
                    
				</div>		
				@endforeach
			</div>
		</div>
	</div>

	
@stop
