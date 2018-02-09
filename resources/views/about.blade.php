@extends('layouts.master-home')

@section('content')
<div class="super_container">

	@include('layouts.master-sidebar')

	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="home">Home</a></li>
						<li class="active"><a href="about"><i class="fa fa-angle-right" aria-hidden="true"></i>About Garda Teknika</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/slider_2.jpg)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2>PT. Garda Teknika</h2>
						<p>PT. GARDA <span style="color: #fe4c50;"> TEKNIKA </span> is a company with extensive experience in the instrumentation products for measurement, monitoring and Quality control. <br>Our products and control systems bring enormous advantages to industry and also education with greater effectiveness in the implementation of industrial processes and as a direct result the client takes advantage of a greater performance and higher profitability of the available means. </p>
					</div>
				</div>
			</div>
		</div>

	</div>


</div>

@endsection