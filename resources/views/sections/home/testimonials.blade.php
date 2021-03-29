	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{{$titles[0]->testimonial}}</h2>
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
	</div>
	<!-- Testimonial section end-->