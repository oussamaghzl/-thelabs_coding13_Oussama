	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">

					@if (count($errors)>0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					<!-- newsletter form -->
					<form action="add-newsletter" method="POST" class="nl-form">
						
						@csrf
						<input type="text" name="email" placeholder="Your e-mail here">
						<button type="submit" class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
    </div>
    
	<!-- newsletter section end-->