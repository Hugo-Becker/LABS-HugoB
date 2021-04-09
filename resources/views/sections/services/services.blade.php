	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{!! $serviceTitle !!}</h2>
			</div>
			<div class="row">
				<!-- single service -->

				@foreach ($paginateServices as $service)

					<div class="col-md-4 col-sm-6">
						<div class="service">
							<div class="icon">
								<i class="{{$service->icon}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$service->title}}</h2>
								<p>{{$service->text}}</p>
							</div>
						</div>
					</div>

					
				@endforeach

				
			</div>

			<div class="text-center">

				{{$paginateServices->links()}}

			</div>

			


		</div>
	</div>
	<!-- services section end -->