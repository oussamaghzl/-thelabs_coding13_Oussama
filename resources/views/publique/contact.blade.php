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
	
	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>
					<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
					<p class="con-item">0034 37483 2445 322</p>
					<p class="con-item">hello@company.com</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->
@endsection