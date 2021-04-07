	<!-- Team Section -->
	<div id="team" class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$teamTitle[0]}}<span>{{$teamTitle[1]}}</span>{{$teamTitle[2]}}</h2>
			</div>
			<div class="row">
				{{-- @foreach ($members as $member)
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('img/team/' . $member->img )}}" alt="">
							<h2>{{$member->name}}</h2>
							<h3>{{$member->function}}</h3>
						</div>
					</div>
				@endforeach --}}
				@foreach ($users->where('poste_id', '!=', 1)->random(2)->shuffle() as $item)
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        {{-- <img height="400" width="90%" src="{{asset('img/avatar/'.$item->img)}}" alt=""> --}}
						<img src="{{asset('img/team/' . $members[$loop->iteration]->img )}}" alt="">

                        <h2>{{$item->name}}</h2>
                        <h3>{{$item->postes->name}}</h3>
                    </div>
                </div>
                @if ($loop->iteration == 1)
                    <div class="col-sm-4">
                        <div class="member">

							<img src="{{asset('img/team/' . $members[$loop->iteration-1]->img )}}" alt="">

                            {{-- <img height="400" width="90%" src="{{asset('img/avatar/'.$boss->img)}}" alt=""> --}}
                            <h2>{{$boss->name}}</h2>
                            <h3>{{$boss->postes->name}}</h3>
                        </div>
                    </div>
                @endif
            @endforeach

			</div>
		</div>
	</div>
	<!-- Team Section end-->
