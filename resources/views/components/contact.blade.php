<!-- Contact section -->
<div class="contact-section spad fix">
	<div class="container">
		<div class="row">
			<!-- contact info -->
			<div class="col-md-5 col-md-offset-1 contact-info col-push">
				<div class="section-title left">
					<h2>{!! $tab[6] !!}</h2>
				</div>
				<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
				<h3 class="mt60">{{$contact->titre}}</h3>
				<p class="con-item">{{$contact->rue}} <br> {{$contact->codepostal}} </p>
				<p class="con-item">{{$contact->telephone}}</p>
				<p class="con-item">{{$contact->email}}</p>
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