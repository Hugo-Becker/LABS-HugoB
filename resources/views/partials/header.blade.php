	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/' . $logo[0]->img)}}" height="40px" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">


				<li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="/">Home</a>
                </li>
                <li class="{{ Request::is('services') ? 'active' : '' }}">
                    <a href="/services">Services</a>
                </li>
                <li class="{{ Request::is('blogs') ? 'active' : '' }}">
                    <a href="/blogs">Blog</a>
                </li>
                <li class="{{ Request::is('contacts') ? 'active' : '' }}">
                    <a href="/contacts">Contact</a>
                </li>

				@if (Auth::check())

				<li>
					<a href="/home">BackOffice</a>
				</li>
					
				@endif

			</ul>
		</nav>
	</header>
	<!-- Header section end -->