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
				<div class="row ">
					<div class="col-md-8 col-sm-7 blog-posts">
						@foreach ($article as $item)
							@if ($item->check == 'oui')
								<div class="post-item">

									<div class="post-thumbnail">
										<img src="{{asset('img/'. $item->image)}}" alt="">
										<div class="post-date">
											<h2>{{$item->created_at->format('d')}}</h2>
											<h3>{{$item->created_at->format('M')}} {{$item->created_at->format('Y')}}</h3>
										</div>
									</div>
									<div class="post-content">

										<h2 class="post-title">{{$item->titre}}</h2>

										<div class="post-meta">

											@foreach ($item->tags as $elem)
												<a href="">{{$elem->name}}</a>
											@endforeach
											
											
											<div class="d-none">{{$a=0}}</div>

											@foreach ($commentaire as $elem)
												@if ($elem->article_id == $item->id)
													<div class="d-none">{{$a++}}</div>
												@else
												@endif

											@endforeach

											<a href="">Comment ({{$a}})</a>


										</div>

										<p> {{Str::limit($item->texte, 300, ' ...') }} </p>

										<a href="/post/{{$item->id}}" class="read-more">Read More</a>

									</div>

								</div>						
						
							@endif
						@endforeach
						
						{{ $article->links() }}

						
					</div>
					<!-- Sidebar area -->
					<div class="col-md-4 col-sm-5 sidebar">
						<!-- Single widget -->
						<div class="widget-item">
						<form action="/search" method="get" class="search-form">

							<input type="text" name="query" placeholder="Search">
							<button type="submit" class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
						<!-- Single widget -->
						<div class="widget-item">
							<h2 class="widget-title">Categories</h2>
							<ul>
								@foreach ($categories as $item)
									<li><a href="#">{{$item->name}}</a></li>

								@endforeach
								
							</ul>
						</div>
						
						<!-- Single widget -->
						<div class="widget-item">
							<h2 class="widget-title">Tags</h2>
							<ul class="tag">
								@foreach ($tags as $item)
									<li><a href="#">{{$item->name}}</a></li>

								@endforeach
								
							</ul>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
		<!-- page section end-->
	
	
		@include('components.newsletter')

@endsection