	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{asset('img/' . $logo[0]->img)}}" alt="">
				{{-- <p>{{$titles[0]->intro}}</p> --}}
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($sliders as $slide)
				<div class="item  hero-item" data-bg="{{asset('img/'.$slide->img)}}"><p style="font-size: 24px;
					color: #0b1033;
					margin-bottom: 0;
					padding-top: 580px;" class="pCarrousel text-center">{{$slide->text}}</p></div>
			@endforeach

		</div>
	</div>
	<!-- Intro Section -->