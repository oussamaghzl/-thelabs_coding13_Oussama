@extends('template.templateP')
@section('content')
	
<header class="header-section">
	<div class="logo">
		<img src="{{asset("img/logoPetit.jpg")}}" alt=""><!-- Logo -->
	</div>
	<!-- Navigation -->
	<div class="responsive"><i class="fa fa-bars"></i></div>
	<nav>
		<ul class="menu-list">
			<li ><a href="{{ Route('Accueil')}}">{{$navbar->page1}}</a></li>
			<li ><a href="{{ Route('Service')}}">{{$navbar->page2}}</a></li>
			<li ><a href="{{ Route('Blog')}}">{{$navbar->page3}}</a></li>
			<li class="active"><a href="{{ Route('Contact')}}">{{$navbar->page4}}</a></li>
			
			@if (Route::has('login'))
					@auth
						<li><a href="{{ url('/home') }}">Oussama</a></li>
					@else
						<li><a href="{{ route('login') }}">Login</a></li>
						@if (Route::has('register'))
							<li><a href="{{ route('register') }}">Register</a></li>
						@endif
					@endauth
			@endif
		</ul>
	</nav>
</header>
	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Contact</h2>
				<div class="page-links">
					<a href="{{ Route ('Accueil')}}">Home</a>
					<span>Contact</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->


	<!-- Google map -->
	<iframe width="100%" height="600vh" src="https://maps.google.com/maps?q={{$contact->recherche}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"></iframe>
	
	@include('components.contact')

@endsection