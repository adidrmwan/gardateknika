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
						<li class="active"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i>Measurement System</a></li>
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
								<div class="single_product_image_background" style="background-image:url(images/hexagon_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details" >
					<div class="product_details_title">
						<h2 class="p-center">Hexagon Products</h2>
						<p>
							 PT GARDA TEKNIKA as Distributor Partner Hexagon Metrology Systems provides:<br>
							 -ROMER Absolute Arm : All models of the ROMER Absolute Arm are available in three levels of accuracy, allowing you to select the right measuring arm for your application requirements and budget. The 73 Series and 75 Series arms offer excellent price/performance ratios for everyday metrology operations, while the 77 Series – the most accurate ROMER Absolute Arm ever produced–is ideal for specialist or high-end measurement applications.
							 <br>
							 -GLOBAL Clasic Bridge CMM : The GLOBAL Classic is an affordable all-purpose CMM for the dimensional inspection of a variety of components. It can be equipped with touch-trigger probes or optional scanning probes. GLOBAL Classic CMMs are used in a number of industries for first and final part inspection, fixture qualification and more.
							 <br><br>
							<a href="http://hexagonmi.com">More detail click here</a>
						</p>

					</div>
				</div>
			</div>
			
			</div>
		</div>
</div>

@endsection