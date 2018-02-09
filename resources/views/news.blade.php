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
			<div class="col-lg-10">
				<div class="product_details">
					<div class="product_details_title">
						<h2>Upcoming Events and News</h2>
						<p> no upcoming events and news</p>
					</div>
				</div>
			</div>
		</div>

	</div>


</div>

@endsection