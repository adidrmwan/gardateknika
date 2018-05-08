@extends('layouts.master-home')

@section('content')
<div class="super_container">

	<!-- Header -->

	<!-- sidebar -->
	@include('layouts.master-sidebar')

	<!-- Slider -->
		<div id="demo" class="carousel slide" data-ride="carousel">

		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      	<div class="main_slider" style="background-image:url(images/slider_1.png)">
					<div class="container fill_height">
						<div class="row align-items-center fill_height">
							<div class="col">
								<div class="main_slider_content" style="margin-top: -10%;">
									<h6 style="color: white;"><span style="color: #fe4c50;"><b>GARDA</b></span> <span style="text-transform: lowercase;"> solusi multi </span> <span style="color: #fe4c50;"><b> TEKNIKA</b> </span></h6>
									<h1 style="color: white;">Your Excellent <br>Solution</h1>
									<div class="red_button shop_now_button"><a href="#type-product">shop now</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>

		  </div>
		  

		</div>

	<!-- Banner -->
	<div class="container" id="type-product">
			<div class="row">
				<div class="col text-center" >
					<div class="section_title">
						<h2 style="margin-top: 15%;">Our Products</h2>
					</div>
				</div>
			</div>
	</div>
	<div class="banner" style="margin-top: 4%;" >
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_1.jpeg)">
						<div class="banner_category">
							<a href="materialresearch">Material Research</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_2.jpeg)">
						<div class="banner_category">
							<a href="nondistructivetest" style="font-size: 20px;">Non Distructive Test (NDT)</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_5.jpg)">
						<div class="banner_category">
							<a href="agriculture">Agriculture</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_4.jpg)">
						<div class="banner_category">
							<a href="automation_system" >Automation System</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_6.jpg)">
						<div class="banner_category">
							<a href="measurement_system">Measurement System</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg)">
						<div class="banner_category">
							<a href="#">Education</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_7.jpg)">
						<div class="banner_category">
							<a href="energy">Energy</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="blogs parallax">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2 style="margin-top: 8%;color: white;">Latest Blogs</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">

				<div class="banner_category" style="margin: 0 auto; display: block; float: none;">
					<a >no upcoming events and news</a>
				</div>
				
				<div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->
	
</div>

@endsection