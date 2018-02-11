@extends('layouts.master-home')

@section('content')
<div class="super_container">

	<!-- Header -->

	<!-- sidebar -->
	@include('layouts.master-sidebar')

	<!-- Slider -->
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
<!-- 		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul> -->
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      	<div class="main_slider" style="background-image:url(images/slider_1.jpg)">
					<div class="container fill_height">
						<div class="row align-items-center fill_height">
							<div class="col">
								<div class="main_slider_content" style="margin-top: -10%;">
									<h6 style="color: white;">PT. GARDA <span style="color: #fe4c50;"><b> TEKNIKA</b> </span></h6>
									<h1 style="color: white;">Higher <br>Profitability</h1>
									<div class="red_button shop_now_button"><a href="#type-product">shop now</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>
		   <!--  <div class="carousel-item">
		      <div class="main_slider" style="background-image:url(images/slider_2.jpg)">
					<div class="container fill_height">
						<div class="row align-items-center fill_height">
							<div class="col">
								<div class="main_slider_content">
									<h6 style="color: white;">PT. GARDA <span style="color: #fe4c50;"><b> TEKNIKA</b> </span></h6>
									<h1 style="color: white;">Extensive Experience</h1>
									<div class="red_button shop_now_button"><a href="#type-product">shop now</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>
		    <div class="carousel-item">
		      <div class="main_slider" style="background-image:url(images/slider_3.jpg)">
					<div class="container fill_height">
						<div class="row align-items-center fill_height">
							<div class="col">
								<div class="main_slider_content">
									<h6 style="color: white;">PT. GARDA <span style="color: #fe4c50;"><b> TEKNIKA</b> </span></h6>
									<h1 style="color: white;">Greater Performance</h1>
									<div class="red_button shop_now_button"><a href="#type-product">shop now</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div> -->
		  </div>
		  
		  <!-- Left and right controls -->
<!-- 		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a> -->
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
							<a href="#">Material Research</a>
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
							<a href="#">Measurement System</a>
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
							<a href="#">Energy</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->
<!-- 
	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Blogs -->

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
				<!-- <div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/banner_1.jpeg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/banner_2.jpeg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/banner_3.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div> -->

				<div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->
	
</div>

@endsection