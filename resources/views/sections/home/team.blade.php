	<!-- Team Section -->
	<div id="team" class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$teamTitle[0]}}<span>{{$teamTitle[1]}}</span>{{$teamTitle[2]}}</h2>
			</div>
			<div class="row">
				@foreach ($members as $member)
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('img/team/' . $member->img )}}" alt="">
							<h2>{{$member->name}}</h2>
							<h3>{{$member->function}}</h3>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->
