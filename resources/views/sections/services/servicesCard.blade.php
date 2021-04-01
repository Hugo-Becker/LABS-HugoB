	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				@foreach ($lastThreeServices as $key => $service)
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="{{asset('img/'. $serviceCards[($loop->iteration-1)]->img)}}" alt="">
						</div>
						<div class="card-text">
							<h2>{{$service->title}}</h2>
							<p>{{$service->text}}</p>
						</div>
					</div>
				</div>		
				@endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->