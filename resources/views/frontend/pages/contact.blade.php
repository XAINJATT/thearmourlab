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
				<div class="col-lg-5 mb-50">
					<form class="contact-form style1 ajax-form" action="">
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
								<div class="form-group mb-3">
									<div class="input-group">
										<div class="g-recaptcha" data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
										<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<button name="submit" type="submit" value="Submit" class="btn btn-secondary btn-lg"> Send Message</button>
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
									<p>Protect Your Invest With The Armour Lab, And Let Our Lab Formulate A&nbsp;Solution For You</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 mb-15">
								<div class="icon-box">
									<h6 class="title"><i class="ti-id-badge"></i>Email & Phone</h6>
									<a href="javascript:void(0);">info@thearmourlab.com</a>
									<p>+&nbsp;416 675 6853</p>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.1298878182047!2d-81.38369578541523!3d30.204840081824198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e437ac927a996b%3A0x799695b1a2b970ab!2sNona+Blue+Modern+Tavern!5e0!3m2!1sen!2sin!4v1548177305546" class="align-self-stretch d-flex" style="width:70%; width:100%; min-height: 350px;" allowfullscreen=""></iframe>
	</div>
</div>
@endsection

@section('scripts')
@endsection