	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>
					<p>{{$contacts[0]->text}}</p>
					<h3 class="mt60">Main Office</h3>
					@foreach ($adresses as $adress)
						<p class="con-item">{{$adress->street}}<br> {{$adress->city}} </p>						
					@endforeach

					@foreach ($phones as $phone)
						<p class="con-item">{{$phone->number}}</p>
					@endforeach

					@foreach ($mails as $mail)
						<p class="con-item">{{$mail->mail}}</p>
					@endforeach

				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull" id="form">
					        {{-- ERROR --}}
						{{-- {{dd(url()->full())}} --}}

						
						@if ($errors->any())
							<div  class="alert alert-danger ">
								<button type="button" class="close" data-dismiss="alert">×</button>    
								{{ implode('', $errors->all(':message')) }}
							</div>
						@endif
				
						{{-- SUCCESS --}}
						@if(Session::has('success'))
				
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
				
						@endif
					<form method="POST" action="/forms" class="form-class" id="con_form">
						@method('POST')
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input value="{{old('name')}}" type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input value="{{old('email')}}" type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">

								<select name='subject'  class="form-control mb-3" value="">
									<option  value="none">Subject</option>
									@foreach ($subjects as $subject)

										<option value="{{$subject->name}}">{{$subject->name}}</option>
										
									@endforeach
								</select>
								<textarea  class="mt-3" name="message" placeholder="Message">{{old('message')}}</textarea>
								<button type="submit" class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->