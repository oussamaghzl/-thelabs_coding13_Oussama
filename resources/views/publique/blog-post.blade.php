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
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{asset('img/'. $article->image)}}" alt="">
							<div class="post-date">
								<h2>{{$article->created_at->format('d')}}</h2>
								<h3>{{$article->created_at->format('M')}} {{$article->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$article->titre}}</h2>
							<div class="post-meta">
								@foreach ($article->tags as $item)
									<a href="">{{$item->name}}</a>

								@endforeach
								


								<div class="d-none">{{$a=0}}</div>

									@foreach ($commentaire as $elem)
										@if ($elem->article_id == $article->id)
												<div class="d-none">{{$a++}}</div>
										@else
									@endif

								@endforeach

								<a href="">Comment ({{$a}})</a>
								
							</div>
							<p>{{$article->texte}}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img width="100px" src="{{asset('img/'. $article->user->pdp)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$article->user->name}}, <span>Author</span></h2>
								<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							
							<h2>Comments ({{$a}})</h2>

							<ul class="comment-list">
								@foreach ($commentaire as $item)

									@if ($item->article_id == $article->id)

										<div class="d-none">{{$a++}}</div>

										<li>
											<div class="avatar">
												<img src="{{asset('img/'. $item->user->pdp)}}" alt="">
											</div>
											<div class="commetn-text">
												<h3>{{$item->user->name}} | {{$article->created_at->format('d')}} {{$article->created_at->format('M')}}, {{$article->created_at->format('Y')}} | Reply</h3>
												<p>{{$item->texte}}</p>
											</div>
										</li>

									@endif

								@endforeach
								
							</ul>
						</div>
						<!-- Commert Form -->
						
						@if (Auth::check())
							<div class="row">
								<div class="col-md-9 comment-from">
									<h2>Leave a comment</h2>
									<form class="form-class" method="POST" action="/add-comment">
										@csrf
										<div class="row">
											<div class="col-sm-6">
												<input type="text" disabled  value="{{Auth::user()->name}}" placeholder="Your name">
											</div>
											<div class="col-sm-6">
												<input type="text" value="{{Auth::user()->email}}" disabled placeholder="Your email">
											</div>
											<div class="col-sm-12">
												<input class="d-none" name="article_id" value="{{$article->id}}">

												<textarea name="texte" placeholder="Message"></textarea>
												
												<button class="site-btn" type="submit">Send</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							
						@else

							<div class="row" >
								<button style="font-size: 30px" class="mr-5 btn btn-primary">
									<a class="px-3 text-white " href="{{ route('login') }}">Login</a>
								</button>
								@if (Route::has('register'))
								<button style="font-size: 30px" class="btn btn-danger">
									<a class="px-3 text-white " href="{{ route('register') }}">Register</a>
								</button>
								@endif
							</div>

						@endif
					</div>
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
							@foreach ($article->categories as $item)
								<li><a href="#">{{$item->name}}</a></li>
							@endforeach
						</ul>
					</div>
					
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($article->tags as $item)
								<li><a href="#">{{$item->name}}</a></li>
							@endforeach
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