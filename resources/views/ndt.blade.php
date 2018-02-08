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
						<li class="active"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i>Non Distructive Test</a></li>
					</ul>
				</div>

			</div>


		</div>

	</div>
		<div class="container" style="margin-top: -80px;">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_1.jpeg)">
						<div class="banner_category">
							<a href="http://karldeutsch.de">Karl Deutsch</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_2.jpeg)">
						<div class="banner_category">
							<a href="http://eddyfi.com">EDDYFI</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg)">
						<div class="banner_category">
							<a href="http://efer.com">Ever NDT Vision</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

@endsection