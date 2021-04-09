	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Are you ready to stand out?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
				</div>

				{{-- <div class="col-md-3">
					<div class="promo-btn-area">

						<a href="" class="site-btn btn-2">Subscribe to out newsletter</a>
						
						<input class="form-control mt-5" value="@gmail.com" type="email" name="" id="">

					</div>
				</div> --}}
			</div>
		</div>
	</div>


	<div class="newsletter-section spad" id="newsletter">
		<div class="container">
			{{-- ERROR --}}
			@if ($errors->first_form->any())
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>    
							{{ implode('', $errors->first_form->all(':message')) }}
						</div>
			@endif
			{{-- SUCCESS --}}
			@if(Session::has('success1'))
	
				<div class="alert alert-success">
					{{Session::get('success1')}}
				</div>
	
			@endif
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					
	
	
					<form class="nl-form" action="/newsletter" method="POST">
						
						@csrf
						<input type="text" name="email">
						<button class="site-btn btn-2">Send</button>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->