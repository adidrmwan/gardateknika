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
						<li class="active"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i>Material Research</a></li>
					</ul>
				</div>

			</div>


		</div>

	</div>
		<div class="container" style="margin-top: -80px;">
			<div class="row">
			<div class="col-lg-6" >
				
				<div class="single_product_pics" >
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image mid-product" >
								<div class="single_product_image_background" style="background-image:url(images/material_testing.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details" >
					<div class="product_details_title">
						<div class="banner_category">
							<a href="material_testing" style="font-size: 30px;">MATERIAL TESTING</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-lg-6" >
				
				<div class="single_product_pics" >
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image mid-product" >
								<div class="single_product_image_background" style="background-image:url(images/material_characterization.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details" >
					<div class="product_details_title">
						<div class="banner_category">
							<a href="material_characterization" style="font-size: 30px;">MATERIAL CHARACTERIZATION</a>
						</div>


					</div>
				</div>
			</div>

			</div>
		</div>
</div>

@endsection