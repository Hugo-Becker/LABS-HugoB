	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$serviceTitle[0]}}<span>{{$serviceTitle[1]}}</span>{{$serviceTitle[2]}}</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				
				{{-- <div class="col-md-4 col-sm-4 features">
					@foreach ($lastSixServices as $key => $service)
						
						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$service->title}}</h2>
								<p>{{$service->text}}</p>
							</div>
							<div class="icon">
								<i class="{{$service->icon}}"></i>
							</div>
						</div>

						@if ($loop->iteration==3)

							@break
							
						@endif
				
					@endforeach
				
				</div> --}}
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">

					@foreach ($lastSixServices as $key => $service)

						@if ($key>3)

						{{-- {{dd($key)}} --}}

							<div class="icon-box light">
								<div class="icon">
									<i class="{{$service->icon}}"></i>
								</div>
								<div class="service-text">
									<h2>{{$service->title}}</h2>
									<p>{{$service->text}}</p>
								</div>
							</div>
						@else
								
							
						@endif

					@endforeach
				</div>
			</div>
	
		</div>
	</div>
	<!-- features section end-->