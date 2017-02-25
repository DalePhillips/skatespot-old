@include('partials/head')

<div class="home-container">
	
	<div class="left"></div>
	<div class="right"></div>

	<div class="login">
		<h3>Create an Account</h3>

		<p>Enter your information below to create a skatespot account.</p>
		@include('auth/homeregister')

	</div>

</div>

<div class="container">

	<div class="top">
		
		<div class="logo"><img src="{{ asset('images/logo.png') }}" alt="Skatespot Logo"></div>

		<ul>
			<li><a href="#">Explore</a></li>
			<li><a href=""> | </a></li>
			<li><a href="#">Sign-in</a></li>
		</ul>

	</div>

	<div class="hero">

		<div class="content">

			<h1>Join the biggest online skateboarding community today.</h1>

			<p>Skatespot brings to you one of the first community based skateboarding networks, 
along with hundreds of searchable online skatespots.
<br>
<br>
We aim to provide an online social experience with hundreds of features made especially for skateboarders.

</p>

			<button><a href="#">Learn More</a></button>

		</div>

	</div>

</div>

@include('partials/footer')