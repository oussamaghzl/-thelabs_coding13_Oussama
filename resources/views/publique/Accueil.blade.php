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
				<li class="active"><a href="{{ Route('Accueil')}}">{{$navbar->page1}}</a></li>
				<li><a href="{{ Route('Service')}}">{{$navbar->page2}}</a></li>
				<li><a href="{{ Route('Blog')}}">{{$navbar->page3}}</a></li>
				<li><a href="{{ Route('Contact')}}">{{$navbar->page4}}</a></li>
				
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

	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{asset("img/logoGrand.jpg")}}" alt=""><!-- Logo -->
				<p>{!! $tab[0] !!}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($caroussel as $item)
				<div class="item  hero-item" data-bg="{{asset('img/'.$item->image)}}"></div>

			@endforeach
			
		</div>
	</div>
	<!-- Intro Section -->

	<div class="about-section">
		<div class="overlay"></div>

	<div class="card-section">
		<div class="container">
			<div class="row">

				@foreach ($service3card as $elem)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$elem->icone->image}}"></i>
							</div>
							<h2>{{$elem->titre}}</h2>
							<p>{{$elem->text}}</p>
						</div>
					</div>
				@endforeach
				
			</div>

		</div>
	</div>
	<!-- card section end-->


	<!-- About contant -->
	<div class="about-contant">
		<div class="container">
			<div class="section-title">
				<h2>{!! $tab[1] !!}</h2>
			</div>
			<div class="row">
				
				<div class="col-md-6">
					<p>
						{{$video->colGauche}}
					</p>
				</div>
				<div class="col-md-6">
					<p>
						{{$video->colDroite}}
					</p>
				</div>
			</div>
			<div class="text-center mt60">
				<a href="{{ Route('Service')}}" class="site-btn">{{$video->bouton}}</a>
			</div>
			<!-- popup video -->
			<div class="intro-video">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<img src="{{asset('img/'.$video->image)}}" alt="">
						<a href="{{$video->video}}" class="video-popup">
							<i class="fa fa-play"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
	<div class="test-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
				<div class="section-title left">
					<h2>{!! $tab[2] !!}</h2>

				</div>
				<div class="owl-carousel" id="testimonial-slide">
					<!-- single testimonial -->
					@foreach ($testi as $item)

						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>
								{{$item->texte}}
							</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('img/' . $item->team->photo )}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$item->team->name}}</h2>
									<p>{{$item->team->comapany}}</p>
								</div>
							</div>
						</div>

					@endforeach
					
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	@include('components.service')
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
	<div class="overlay"></div>
	<div class="container">
		<div class="section-title">
			<h2>{!! $tab[4] !!}</h2>
		</div>
		<div class="row">

			@foreach ($teams as $item)

				@if ($item->fonction != 'CEO Company' && $ok != 2)

					
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('img/'.$item->photo)}}" alt="">
							<h2>{{$item->name}}</h2>
							<h3>{{$item->fonction}}</h3>
						</div>
					</div>
					
					<div class="d-none">{{$ok++}}</div>
					<div class="d-none">{{$counter = $item->id}}</div>
				
				@endif
			@endforeach
			
			@foreach ($teams  as $item)
			
				@if ($item->fonction == 'CEO Company')

					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('img/'.$item->photo)}}" alt="">
							<h2>{{$item->name}}</h2>
							<h3>{{$item->fonction}}</h3>
						</div>
					</div>

				@endif
			@endforeach
					
			<div class="d-none">{{$ok=1}}</div>

			@foreach ($teams as $item)

				@if ($item->fonction != 'CEO Company' && $item->id != $counter && $ok != 2)
					
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('img/'.$item->photo)}}" alt="">
							<h2>{{$item->name}}</h2>
							<h3>{{$item->fonction}}</h3>
						</div>
					</div>
					
					<div class="d-none">{{$ok++}}</div>
					
				@endif
			@endforeach

		</div>

	</div>
	
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2>{!! $tab[5] !!}</h2>
				<p>{{$ready->soustitre}}</p>
			</div>
			<div class="col-md-3">
				<div class="promo-btn-area">
					<a href="{{ Route('Contact')}}" class="site-btn btn-2">{{$ready->bouton}}</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- Promotion section end-->

	@include('components.contact')
	


	
@endsection