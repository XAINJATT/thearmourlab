@extends('frontend.layout.app')

@section('title')
{{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
@endsection

@section('content')
<div class="page-content bg-white">
	<div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
		<div class="container">
			<div class="page-banner-entry text-center">
				<h1><span>CONTACT US</span></h1>
				<!-- Breadcrumb row -->
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
						<li class="breadcrumb-item active" aria-current="page">CONTACT US</li>
					</ul>
				</nav>
				<!-- Breadcrumb row END -->
			</div>
		</div>
	</div>

	<!-- Contact Info -->
	<section class="section-area section-sp1">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12">
					@if(session()->has('success-message'))
					<div class="alert alert-success">
						{{ session('success-message') }}
					</div>
					@elseif(session()->has('error-message'))
					<div class="alert alert-danger">
						{{ session('error-message') }}
					</div>
					@endif
				</div>
				<div class="col-lg-5 mb-50">
					<form action="{{route('frontend.contact.store')}}" id="addDriverForm" class="contact-form style1" method="post" enctype="multipart/form-data">
						@csrf
						<div class="heading-bx mb-4 text-white">
							<h6 class="title-ext text-white">Contact Form</h6>
							<h3 class="title mb-0">DO YOU HAVE ANY<br /> QUESTIONS</h3>
						</div>
						<div class="ajax-message"></div>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group  mb-3">
									<div class="input-group">
										<input name="name" type="text" required class="form-control valid-character" placeholder="Your Name">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group  mb-3">
									<div class="input-group">
										<input name="email" type="email" class="form-control" required placeholder="Your Email Address">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mb-3">
									<div class="input-group">
										<input name="phone" type="text" required class="form-control int-value" placeholder="Your Phone">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mb-3">
									<div class="input-group">
										<textarea name="message" rows="4" class="form-control" placeholder="Type Message" required></textarea>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<button type="submit" name="submit"  class="btn btn-secondary btn-lg">
									Send Message
								</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-7 mb-30">
					<div class="contact-ri">
						<div class="heading-bx mb-4">
							<h6 class="title-ext text-primary">Contact Info</h6>
							<h2 class="title mb-0">CONTACT US FOR ANY <br />INFORMATIONS</h2>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 mb-15">
								<div class="icon-box">
									<h6 class="title"><i class="ti-map-alt"></i>Location</h6>
									<p>701 Millway Ave unit 6 Vaughan Ontario L4K3S7 </p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 mb-15">
								<div class="icon-box">
									<h6 class="title"><i class="ti-id-badge"></i>Email & Phone</h6>
									<a href="mailto:info@thearmourlab.com">info@thearmourlab.com</a> <br>
									<a href="tel:(416) 675 6853">(416) 675 6853</a>
									<!-- <p>+&nbsp;416 675 6853</p> -->
								</div>
							</div>
							<div class="col-lg-12 mb-15">
								<div class="icon-box">
									<h6 class="title"><i class="ti-world"></i>Follow Us</h6>
									<ul class="social-media">
										<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
										<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Map -->
	<div class="section-area">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.1117088358656!2d-79.53489302407557!3d43.812042242143306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2f8768e07897%3A0x33dd98ca9562b219!2sThe%20Armour%20Lab!5e0!3m2!1sen!2sus!4v1702199588491!5m2!1sen!2sus" class="align-self-stretch d-flex" style="width:70%; width:100%; min-height: 350px;" allowfullscreen=""></iframe>
		</div>
</div>
@endsection

@section('scripts')
@endsection