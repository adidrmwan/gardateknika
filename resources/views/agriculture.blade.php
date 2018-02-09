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
						<li><a href="home">Home</a></li>
						<li class="active"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i>Agriculture</a></li>
					</ul>
				</div>

			</div>


		</div>

	</div>
		<div class="container" style="margin-top: -80px;">
			<div class="row">
			<div class="col-lg-6" >
				<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
					<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/seedburo_product.png)"></div>
							</div>
						</div>
					</div>
					<div class="product_details" >
					<div class="product_details_title">
						<h2>Name of Product</h2>
						<p>
							Description of Seddburo's Product<br>
							<a href="http://seedburo.com">Click here for more info</a>
						</p>

					</div>
				</div>
			</div>
			<div class="col-lg-6" >
				
				<div class="single_product_pics" >
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/dickey_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details" >
					<div class="product_details_title">
						<h2>Name of Product</h2>
						<p>
							Description of Dickey John's Product<br>
							<a href="http://dickey-john.com">Click here for more info</a>
						</p>

					</div>
				</div>
			</div>
			<div class="col-lg-6" >
				
				<div class="single_product_pics" >
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/kett_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details" >
					<div class="product_details_title">
						<h2>Name of Product</h2>
						<p>
							Description of Kett's Product<br>
							<a href="http://kett.com">Click here for more info</a>
						</p>

					</div>
				</div>
			</div>
			</div>
		</div>
</div>

@endsection