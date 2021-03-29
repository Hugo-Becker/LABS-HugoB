	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="img/big-logo.png" alt="">
				<p>{{$titles[0]->intro}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($sliders as $slide)
				<div class="item  hero-item" data-bg="{{asset('img/'.$slide->img)}}"></div>
			@endforeach

		</div>
	</div>
	<!-- Intro Section -->