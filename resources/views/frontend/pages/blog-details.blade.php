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
				<h1><span>{{ $blogDetails->title }}</span></h1>
				<!-- Breadcrumb row -->
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
						<li class="breadcrumb-item"><a href="/blog"><i class="las la-list"></i>Blog > </a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ $blogDetails->title }}</li>
					</ul>
				</nav>
				<!-- Breadcrumb row END -->
			</div>
		</div>
	</div>

	<!-- Blog Details -->
	<section class="section-area section-sp1 bg-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-8 mb-30 mb-md-60">
					<!-- blog start -->
					<div class="blog-lg blog-single">
						<div class="action-box blog-lg">
							<!-- <img src="images/blog/default/pic1.jpg" alt=""> -->
							<img src="{{ $blogDetails->image }}"  alt="{{ $blogDetails->title }}">
						</div>
						<div class="info-bx">
							<!-- <ul class="post-meta">
								<li class="author"><img src="images/testimonials/pic1.jpg" alt="">By <a href="javascript:;">Mark John</a></li>
								<li class="date"><a href="javascript:;">15 Aug 2021</a></li>
							</ul>
							<div class="ttr-post-title">
								<h3 class="post-title">Why every startup should adopt Amazon’s Hot Air. Why every startup should adopt.</h3>
							</div>
							<div class="ttr-post-text">
								<p>You just need to enter the keyword and select the keyword type to generate a list of 6 title ideas and suggestions. If you’re not satisfied with the results, you can always hit the refresh button to generate a new list of unique titles.</p>
								<blockquote class="wp-block-quote">
									<p>Once you’ve gotten all the titles and have chosen the best one, the next thing you need to do is to craft a magnetic content. Great content marketers excel at creating content.</p>
								</blockquote>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								<ul class="wp-block-gallery columns-6 is-cropped">
									<li class="blocks-gallery-item"><img alt="" src="images/gallery/pic3.jpg"></li>
									<li class="blocks-gallery-item"><img alt="" src="images/gallery/pic5.jpg"></li>
								</ul>
								<p>You just need to enter the keyword and select the keyword type to generate a list of 6 title ideas and suggestions. If you’re not satisfied with the results, you can always hit the refresh button to generate a new list of unique titles.</p>
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div> -->
							<ul class="post-meta">
								{{-- <li class="author"><img src="{{ $blogDetails->blog_writer_picture }}" alt="{{ $blogDetails->blog_writer_name }}">By <a href="javascript:;">{{ $blogDetails->blog_writer_name }}</a></li> --}}
								<li class="date"><a href="javascript:;">{{ \Carbon\Carbon::parse($blogDetails->created_at)->format('d M Y') }}</a></li>
							</ul>
							<div class="ttr-post-title">
								<h3 class="post-title">{{ $blogDetails->title }}</h3>
							</div>
							<div class="ttr-post-text">
								<p>{!! $blogDetails->description !!}</p>
							</div>
							<!-- <div class="ttr-post-footer">
								<div class="post-tags">
									<strong>TAGS:</strong>
									<a href="javascript:void(0);">PAINTING</a>
									<a href="javascript:void(0);">REPAIRING</a>
									<a href="javascript:void(0);">TECHNICIALS</a>
								</div>
								<div class="share-post ms-auto">
									<ul class="social-media">
										<li><strong>SHARE:</strong></li>
										<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
										<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div> -->
						</div>
					</div>
					<!-- <div class="author-box blog-user mb-60">
						<div class="author-profile-info">
							<div class="author-profile-pic">
								<img src="images/testimonials/pic2.jpg" alt="">
							</div>
							<div class="author-profile-content">
								<h5>Sonar Z. Moyna</h5>
								<p>Aenean sollicitudin, lorem quis biber idum auctor anisi elit consequat happ quam vel enim augue.</p>
								<ul class="social-media">
									<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div> -->
					<!-- blog END -->
				</div>
				<div class="col-md-12 col-lg-4 col-xl-4 mb-30">
					<aside class="side-bar sticky-top aside-bx">
						@include("frontend.partials.search")
						<div class="widget recent-posts-entry">
							<h5 class="widget-title">Recent Posts</h5>
							<!-- <div class="widget-post-bx">
								<div class="widget-post clearfix">
									<div class="ttr-post-media"> <img src="images/blog/recent-blog/pic1.jpg" width="200" height="143" alt=""> </div>
									<div class="ttr-post-info">
										<div class="ttr-post-header">
											<h6 class="post-title"><a href="/blog-details">Precious Tips To Help You Get Better.</a></h6>
										</div>
										<ul class="post-meta">
											<li class="author">By <a href="javascript:;">Thomas deo</a></li>
										</ul>
									</div>
								</div>
								<div class="widget-post clearfix">
									<div class="ttr-post-media"> <img src="images/blog/recent-blog/pic2.jpg" width="200" height="160" alt=""> </div>
									<div class="ttr-post-info">
										<div class="ttr-post-header">
											<h6 class="post-title"><a href="/blog-details">Ten Doubts You Should Clarify About.</a></h6>
										</div>
										<ul class="post-meta">
											<li class="author">By <a href="javascript:;">Sonar</a></li>
										</ul>
									</div>
								</div>
								<div class="widget-post clearfix">
									<div class="ttr-post-media"> <img src="images/blog/recent-blog/pic3.jpg" width="200" height="160" alt=""> </div>
									<div class="ttr-post-info">
										<div class="ttr-post-header">
											<h6 class="post-title"><a href="/blog-details">The 10 Steps Needed For Putting.</a></h6>
										</div>
										<ul class="post-meta">
											<li class="author">By <a href="javascript:;">Falikaz</a></li>
										</ul>
									</div>
								</div>
							</div> -->
							@foreach($recentBlogs as $recentBlog)
							<div class="widget-post clearfix">
								<div class="ttr-post-media">
									<img src="{{ $recentBlog->image }}" width="200" height="143" alt="{{ $recentBlog->title }}">
								</div>
								<div class="ttr-post-info">
									<div class="ttr-post-header">
										<h6 class="post-title"><a href="{{ route('frontend.blogDetails', ['id' => $recentBlog->id]) }}">{{ $recentBlog->title }}</a></h6>
									</div>
									<ul class="post-meta">
										<li class="author">By <a href="javascript:;">{{ $recentBlog->blog_writer_name }}</a></li>
									</ul>
								</div>
							</div>
							@endforeach
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section('scripts')
@endsection