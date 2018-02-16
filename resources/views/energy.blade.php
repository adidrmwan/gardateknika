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
						<li class="active"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i>Energy</a></li>
					</ul>
				</div>

			</div>


		</div>

	</div>
		<div class="container" style="margin-top: -80px;">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-lg-12 image_col order-lg-2 order-1">
						<div class="single_product_image mid-product" >
						<a target="_blank" href="http://fuelcon.com">	<div class="single_product_image_background" style="background-image:url(images/fuelcon_logo.png)"></div></a>
						</div>
					</div>
					
				</div>
			<div class="col-lg-6" >
				
				<div class="single_product_pics" >
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image mid-product" >
								<div class="single_product_image_background" style="background-image:url(images/fuelcon_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details" >
					<div class="product_details_title">
						<h2 class="p-center">PEM Fuel Cell Evaluator and SOFC Fuel Cell Test Station</h2>
						<p>
							 "FuelCon" stands for an extraordinary product quality "made in Germany", a high technical standard and innovation. This has made us to one of the leading global suppliers of test and diagnostic systems for fuel cells and batteries.
							 <br><br>
							<a href="http://fuelcon.com">More detail click here</a>
						</p>

					</div>
				</div>
			</div>
			
			</div>
		</div>
</div>

@endsection