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
			<li class="active"><a href="{{ Route('Service')}}">{{$navbar->page2}}</a></li>
			<li ><a href="{{ Route('Blog')}}">{{$navbar->page3}}</a></li>
			<li><a href="{{ Route('Contact')}}">{{$navbar->page4}}</a></li>
			
			@if (Route::has('login'))
					@auth
					<li><a href="{{ url('/home') }}">{{Auth::user()->name}}</a></li>
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
				<h2>Services</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			

			<!-- Services section -->
			@include('components.service')
			<!-- services section end -->

			
		</div>
	</div>
	<!-- services section end -->


	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! $tab[1] !!}</h2>

			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($servicepage->take(3) as $item)
						
							<div class="icon-box light left">
								<div class="service-text">
									<h2>{{$item->titre}}</h2>
									<p>{{$item->text}}</p>
								</div>
								<div class="icon">
									<i class="{{$item->icone->image}}"></i>
								</div>
							</div>
						<div class="d-none">
							{{$limite=$item->id}}
						</div>
						
					@endforeach
					

				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($servicepage->take(6) as $item)
						
						@if ($item->id < $limite )
							<div class="icon-box light left">
								<div class="service-text">
									<h2>{{$item->titre}}</h2>
									<p>{{$item->text}}</p>
								</div>
								<div class="icon">
									<i class="{{$item->icone->image}}"></i>
								</div>
							</div>
						
							
						
						@endif
					@endforeach
				</div>
			</div>
			<div class="text-center mt100">
				<a href="#3cards" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad" id="3cards">
		<div class="container">
			<div class="row">
				@foreach ($articlePublie as $item)
					
					<!-- Single Card -->
					<div class="col-md-4 col-sm-6">
						<div class="sv-card">
							<div class="card-img">
								<img src="{{asset('img/'. $item->image)}}" alt="">
							</div>
							<div class="card-text">
								<h2>{{$item->titre}}</h2>
								<p> {{Str::limit($item->texte, 100, ' ...') }} </p>
							</div>
						</div>
					</div>

				@endforeach
				
			</div>
		</div>
	</div>
	<!-- services card section end-->


	@include('components.newsletter')


	@include('components.contact')

@endsection