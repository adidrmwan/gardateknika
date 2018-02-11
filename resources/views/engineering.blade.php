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
						<li class="active"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i>Engineering</a></li>
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
							<div class="single_product_image mid-product">
								<div class="single_product_image_background" style="background-image:url(images/quanser_product.png)"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product_details" >
					<div class="product_details_title">
						<h2 class="p-center">Mechanical Engineering Simulator : 3 DOF Crane</h2>
						<p>
							PT GARDA TEKNIKA as Distributor of QUANSER in Indonesia present : 3DOF Crane - Teach students about the real-life control challenges involved in operating a tower crane Commonly used to build structures, tower cranes are designed to lift and move heavy objects over large distances safely. Operating them requires training and skills. The 3 DOF Crane experiment replicates much of the functionality of an actual tower crane and can be used to understand the dynamics and control challenges involved in everyday crane operations. For instance, the challenge of minimizing the motions of the load being carried introduces a great control problem for students.<br><br>
							<a href="http://quanser.com">More detail click here</a>
						</p>

					</div>
				</div>
			</div>

			</div>
		</div>
</div>

@endsection