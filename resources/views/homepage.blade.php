@include('partials/head')

<div class="home-container">
	
	<div class="left"></div>
	<div class="right"></div>

	<div class="login">
		
		@include('auth/homeregister')

	</div>

</div>

<div class="container">

	<div class="top">
		
		<div class="logo"><img src="{{ asset('images/logo.png') }}" alt="Skatespot Logo"></div>

	</div>

</div>

@include('partials/footer')