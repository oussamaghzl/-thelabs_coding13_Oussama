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
			<li><a href="{{ Route('Service')}}">{{$navbar->page2}}</a></li>
			<li class="active"><a href="{{ Route('Blog')}}">{{$navbar->page3}}</a></li>
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

		<!-- Page header -->
		<div class="page-top-section">
			<div class="overlay"></div>
			<div class="container text-right">
				<div class="page-info">
					<h2>Blog</h2>
					<div class="page-links">
						<a href="{{ Route ('Accueil')}}">Home</a>
						<span>Blog</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Page header end-->
	
	
		<!-- page section -->
		<div class="page-section spad">
			<div class="container">
				<div class="row">

					<div class="col-md-8 col-sm-7 blog-posts">

						@foreach ($article as $item)
							<!-- Post item -->
							{{$item->date}}
							<div class="post-item">
								<div class="post-thumbnail">
									<img src="{{asset('img/'. $item->image)}}" alt="">
									<div class="post-date">
										<h2>03 </h2>
										<h3>Nov 2017</h3>
									</div>
								</div>
								<div class="post-content">

									<h2 class="post-title">{{$item->titre}}</h2>

									<div class="post-meta">

										@foreach ($item->tags as $elem)
											<a href="">{{$elem->name}}</a>
										@endforeach

										@foreach ($commentaire as $com)

											<a href="">Comments ({{ $com->id }})</a>

										@endforeach

									</div>

									<p>{{$item->texte}}</p>

									<a href="/post/{{$item->id}}" class="read-more">Read More</a>

								</div>

							</div>						
						@endforeach
						
						
					</div>
					<!-- Sidebar area -->
					<div class="col-md-4 col-sm-5 sidebar">
						<!-- Single widget -->
						<div class="widget-item">
							<form action="#" class="search-form">
								<input type="text" placeholder="Search">
								<button class="search-btn"><i class="flaticon-026-search"></i></button>
							</form>
						</div>
						<!-- Single widget -->
						<div class="widget-item">
							<h2 class="widget-title">Categories</h2>
							<ul>
								<li><a href="#">Vestibulum maximus</a></li>
								<li><a href="#">Nisi eu lobortis pharetra</a></li>
								<li><a href="#">Orci quam accumsan </a></li>
								<li><a href="#">Auguen pharetra massa</a></li>
								<li><a href="#">Tellus ut nulla</a></li>
								<li><a href="#">Etiam egestas viverra </a></li>
							</ul>
						</div>
						
						<!-- Single widget -->
						<div class="widget-item">
							<h2 class="widget-title">Tags</h2>
							<ul class="tag">
								<li><a href="">branding</a></li>
								<li><a href="">identity</a></li>
								<li><a href="">video</a></li>
								<li><a href="">design</a></li>
								<li><a href="">inspiration</a></li>
								<li><a href="">web design</a></li>
								<li><a href="">photography</a></li>
							</ul>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
		<!-- page section end-->
	
	
		<!-- newsletter section -->
		<div class="newsletter-section spad">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h2>Newsletter</h2>
					</div>
					<div class="col-md-9">
						<!-- newsletter form -->
						<form class="nl-form">
							<input type="text" placeholder="Your e-mail here">
							<button class="site-btn btn-2">Newsletter</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- newsletter section end-->
@endsection