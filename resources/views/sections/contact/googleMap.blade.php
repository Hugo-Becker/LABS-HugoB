	<!-- Google map -->
	<div class="map" id="map-area">

		<?php 


		// $adresses=ContactAdress::all();
		$ad=DB::table('contact_adresses')->get();
		$gmap=$ad[0]->street . $ad[0]->city;

		// dd($gmap);

		
		
		
		?>

		

		<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$gmap}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.online-timer.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">google maps on webpage</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>

	</div>
	{{-- <div class="map" id="map-area">

		<iframe
		width="600"
		height="450"
		style="border:0"
		loading="lazy"
		allowfullscreen
		src="https://www.google.com/maps/embed/v1/place?key=API_KEY
		  &q=Space+Needle,Seattle+WA">
	  </iframe>

	</div> --}}

