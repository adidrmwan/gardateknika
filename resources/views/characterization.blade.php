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
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Material Characterization</a></li>
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
							<div class="single_product_image mid-product ">
								<div class="single_product_image_background" style="background-image:url(images/pmi_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details" >
					<div class="product_details_title">
						<h2 class="p-center"> PMI's G PYC 100 AT Gas Pycnometer</h2>
						<p> PMI's G PYC 100 AT Gas Pycnometer provides the user with a reliable measure of absolute density. Real-time graphical test display depicts testing status and results throughout operation<br>
							PT. GARDA TEKNIKA as the Authorize Distributor of PMI Porous Material Inc. in Indonesia present : PMI instruments can measure surface area, density, pore size, pore size distribution, specific gas and vapor interactions (Porometer, Porosimeter, Permeameter, Pycnometer, BET Sorptometer and many more). We also manufacture and provide a broad range of lab instrumentation for the Oil & Gas industry (Rock Core Analysis Instruments). The testing services division of PMI offers contract testing services for a wide variety of pore characterization tests. In addition, we hold several US and International patents on novel technology for characterization of pore structure.
							<br><br>
							<a href="http://pmiapp.com">More detail click here</a>
						</p>

					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-12 image_col order-lg-2 order-1">
							<div class="single_product_image mid-product">
								<div class="single_product_image_background" style="background-image:url(images/coxem_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details">
					<div class="product_details_title">
						<h2 class="p-center">EM-30AX SEM-EDS TOTAL SOLUTION</h2>
						<p>
							The EM-30AX, which can implement Electron microscopy and Elemental analysis functions in any small space at the same time, released from the joint development by Thermo Fisher and COXEM, provide convenient features and high reliability. In addition, as an integrated device, the equipment can be used at a lower cost than the separately purchased products. <br> <br>
							<a href="http://coxem.com">More detail click here</a>
						</p>

					</div>
				</div>
			</div>
			</div>
		</div>
</div>

@endsection