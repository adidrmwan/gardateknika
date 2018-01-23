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
						<li class="active"><a href="about"><i class="fa fa-angle-right" aria-hidden="true"></i>News and Events</a></li>
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
								<div class="single_product_image_background" style="background-image:url(images/slider_3.jpg)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2>Press Release Garda Teknika</h2>
						<p>
							Garda Teknika is established to meet the increasing demand of high quality scientific and laboratory equipments. <br> <br>

							We provide cutting edge technologies for universities, industries as well as research institutions. Our products are widely used in material research, metallurgy, energetic materials tests, animal research, chemical, biology and educations. <br> <br>

							Bringing the best services and solutions to our customers is our ultimate goal. Should you not be able to obtain any product information in our website, please do not hesitate to contact us.
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>


</div>

@endsection