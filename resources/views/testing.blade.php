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
						<li ><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Material Research</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Material Testing</a></li>
					</ul>
				</div>

			</div>


		</div>

	</div>
		<div class="container" style="margin-top: -100px;">

		<div class="row">
			<div class="col-lg-6" >
				
				<div class="single_product_pics" >
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/salt_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details" >
					<div class="product_details_title">
						<h2>Name of Product</h2>
						<p>
							Description of Salt's Product<br>
							<a href="http://light-salt.kr">Click here for more info</a>
						</p>

					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/novotest_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details">
					<div class="product_details_title">
						<h2>Name of Product</h2>
						<p>
							Description of Novotest's Product <br>
							<a href="http://novotest.biz">Click here for more info</a>
						</p>

					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/montech_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details">
					<div class="product_details_title">
						<h2>Name of Product</h2>
						<p>
							Description of Mon Tech's Product <br>
							<a href="http://rubber-testing.com">Click here for more info</a>
						</p>

					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/L&Lfurnace_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details">
					<div class="product_details_title">
						<h2>Name of Product</h2>
						<p>
							Description of L&L Furnace's Product <br>
							<a href="http://llfurnace.com">Click here for more info</a>
						</p>

					</div>
				</div>
			</div>
		</div>
		</div>
</div>

@endsection