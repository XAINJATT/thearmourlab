@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-content bg-white">
        <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr2.jpg);">
            <div class="container">
                <div class="page-banner-entry text-center">
                    <h1><span>BLOG</span></h1>
                    <!-- Breadcrumb row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                            <li class="breadcrumb-item active" aria-current="page">BLOG</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>

		<!-- Blog -->
		<section class="section-area section-sp2">
		   <div class="container">
			@include("frontend.partials.search")
				<div class="row">
					<!-- <div class="col-xl-4 col-md-6">
						<div class="blog-card style-1 bg-white shadow">
							<div class="post-media">
								<a href="/blog-details"><img src="images/blog/grid/pic1.jpg" style="filter: grayscale(1);" alt=""></a>
							</div>
							<div class="post-info">
								<h4 class="post-title"><a href="/blog-details">Classification of Car Wash Types by Service Type</a></h4>
								<div class="post-content">
									<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
								<ul class="post-meta">
									<li class="author"><img src="images/testimonials/pic1.jpg" alt="">By <a href="javascript:;">Mark John</a></li>
									<li class="date"><a href="javascript:;">15 Aug 2021</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card style-1 bg-white shadow">
							<div class="post-media">
								<a href="/blog-details"><img src="images/blog/grid/pic6.jpg" style="filter: grayscale(1);" alt=""></a>
							</div>
							<div class="post-info">
								<h4 class="post-title"><a href="/blog-details">Make Your Auto Clean As Before Like New</a></h4>
								<div class="post-content">
									<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
								<ul class="post-meta">
									<li class="author"><img src="images/testimonials/pic2.jpg" alt="">By <a href="javascript:;">Merry Desulva</a></li>
									<li class="date"><a href="javascript:;">15 Aug 2021</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card style-1 bg-white shadow">
							<div class="post-media">
								<a href="/blog-details"><img src="images/blog/grid/pic3.jpg" style="filter: grayscale(1);" alt=""></a>
							</div>
							<div class="post-info">
								<h4 class="post-title"><a href="/blog-details">Interior Cleaning with a Steam Generator</a></h4>
								<div class="post-content">
									<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
								<ul class="post-meta">
									<li class="author"><img src="images/testimonials/pic3.jpg" alt="">By <a href="javascript:;">Thomas deo</a></li>
									<li class="date"><a href="javascript:;">15 Aug 2021</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card style-1 bg-white shadow">
							<div class="post-media">
								<a href="/blog-details"><img src="images/blog/grid/pic4.jpg" style="filter: grayscale(1);" alt=""></a>
							</div>
							<div class="post-info">
								<h4 class="post-title"><a href="/blog-details">Make Your Auto Clean As Before Like New</a></h4>
								<div class="post-content">
									<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
								<ul class="post-meta">
									<li class="author"><img src="images/testimonials/pic4.jpg" alt="">By <a href="javascript:;">Merry Desulva</a></li>
									<li class="date"><a href="javascript:;">15 Aug 2021</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card style-1 bg-white shadow">
							<div class="post-media">
								<a href="/blog-details"><img src="images/blog/grid/pic3.jpg" style="filter: grayscale(1);" alt=""></a>
							</div>
							<div class="post-info">
								<h4 class="post-title"><a href="/blog-details">Excellent Customer Service Car Repair</a></h4>
								<div class="post-content">
									<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
								<ul class="post-meta">
									<li class="author"><img src="images/testimonials/pic5.jpg" alt="">By <a href="javascript:;">Thomas deo</a></li>
									<li class="date"><a href="javascript:;">15 August 2020</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card style-1 bg-white shadow">
							<div class="post-media">
								<a href="/blog-details"><img src="images/blog/grid/pic6.jpg" style="filter: grayscale(1);" alt=""></a>
							</div>
							<div class="post-info">
								<h4 class="post-title"><a href="/blog-details">Classification of Car Wash Types by Service Type</a></h4>
								<div class="post-content">
									<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
								<ul class="post-meta">
									<li class="author"><img src="images/testimonials/pic6.jpg" alt="">By <a href="javascript:;"> Mark John</a></li>
									<li class="date"><a href="javascript:;">15 Aug 2021</a></li>
								</ul>
							</div>
						</div>
					</div> -->
					@foreach($blogDetails as $blog)
						<div class="col-xl-4 col-md-6">
							<div class="blog-card style-1 bg-white shadow">
								<div class="post-media">
									<a href="{{ route('frontend.blogDetails', $blog->id) }}"><img src="{{ asset($blog->image) }}" style="filter: grayscale(1);" alt=""></a>
								</div>
								<div class="post-info">
									<h4 class="post-title"><a href="{{ route('frontend.blogDetails', $blog->id) }}">{{ $blog->title }}</a></h4>
									<div class="post-content">
										<p class="mb-0">{{ \Str::limit(html_entity_decode(strip_tags($blog->description)), 150) }}</p>
									</div>
									<ul class="post-meta">
										{{-- <li class="author"><img src="{{ asset($blog->blog_writer_picture) }}" alt="">By <a href="javascript:;">{{ $blog->blog_writer_name }}</a></li> --}}
										<li class="date"><a href="javascript:;">{{ $blog->created_at->format('d M Y') }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="row">
					<div class="col-lg-12">
						{{ $blogDetails->links('pagination::bootstrap-4') }}
						<!-- <div class="pagination-bx text-center clearfix">
							<ul class="pagination">
								<li class="previous"><a href="javascript:void(0);">Prev</a></li>
								<li class="active"><a href="javascript:void(0);">1</a></li>
								<li><a href="javascript:void(0);">2</a></li>
								<li><a href="javascript:void(0);">3</a></li>
								<li class="next"><a href="javascript:void(0);">Next</a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</section>
    </div>
@endsection

@section('scripts')
@endsection
