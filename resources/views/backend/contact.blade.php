@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="{{asset('css/styleBack.css') }}" />


    	<!-- Contact section -->
	<div class="contact-section spad fix" style="background-color: #6a23b5 !important">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-offset-1 contact-info col-push">
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
			</div>
		</div>
        <a class="mt-5 btn btn-success btn-lg btn-block" href="backContacts/0/edit">Edit</a>
	</div>
    <div class="" id="map-area">

		<?php 


		// $adresses=ContactAdress::all();
		$ad=DB::table('contact_adresses')->get();
		$gmap=$ad[0]->street . $ad[0]->city;

		// dd($gmap);

		
		
		
		?>

		

		<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$gmap}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.online-timer.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">google maps on webpage</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>

	</div>
    	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="{{$footer[0]->url}}" target="_blank">{{$footer[0]->name}}</a></h2>
	</footer>
	<!-- Footer section end -->
	<!-- Contact section end-->

    
@endsection