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
				<form action="/mail" method="post" class="form-class" id="con_form">
					<div id="sendmessage">Your message has been sent. Thank you!</div>
					<div id="errormessage"></div>
					@csrf
					<div class="row">
						<div class="col-sm-6">
							<input type="text" name="name" data-rule="minlen:4" placeholder="Your name" data-msg="Please enter at least 4 chars of subject">
							<div class="validation"></div>

						</div>
						<div class="col-sm-6">
							<input type="email" name="email" placeholder="Your email" data-msg="Please enter a valid email">
							<div class="validation"></div>

						</div>
						<div class="col-sm-12">
							<input type="text" name="subject" placeholder="Subject" data-msg="Please write something for us">
							<textarea name="message" placeholder="Message"></textarea>
							<div class="validation"></div>

							<button type="submit" class="site-btn">send</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	<!-- Contact section end-->
