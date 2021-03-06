@extends('layouts.master-home')

@section('content')
<div class="super_container">

	@include('layouts.master-sidebar')

	<div class="container contact_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="contact"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact Us</a></li>
					</ul>
				</div>

			</div>
		</div>

		<!-- Map Container -->

		<div class="row">
			<div class="col">
				<div id="google_map">
					<div class="map_container">
						<div id="map">
							<div class="google_maps">
								<iframe width="1120" height="505" frameborder="0" style="border:0"
								src="https://www.google.com/maps/embed/v1/place?q=JL.+Brawijaya+No.+209+Pungging+Mojokerto+:+61483&key= AIzaSyBLj6Lb52RueYReX9vdaeEdMOmONs545xE " allowfullscreen></iframe> 
			             	</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact Us -->

		<div class="row">

			<div class="col-lg-12 contact_col">
				<div class="contact_contents">
					<h1>Contact Us</h1>
					<p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
					<div>
						<p><i class="fa fa-phone" aria-hidden="true"></i>
							(+62) 321 685 0941
						</p>
						<p><i class="fa fa-envelope" aria-hidden="true"></i>
						support@gardateknika.com</p>
					</div>
				</div>

				<!-- Follow Us -->
			</div>
<!-- 
			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Get In Touch With Us!</h1>
					<p>Fill out the form below to recieve a free and confidential.</p>
					<form action="post">
						<div>
							<input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
							<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
							<input id="input_website" class="form_input input_website input_ph" type="url" name="name" placeholder="Website" required="required" data-error="Name is required.">
							<textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
						</div>
						<div>
							<button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">send message</button>
						</div>
					</form>
				</div>
			</div> -->

		</div>
	</div>


	</div>


</div>

@endsection