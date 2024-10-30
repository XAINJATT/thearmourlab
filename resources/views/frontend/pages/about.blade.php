@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-content bg-white">
        <!-- Inner Banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr2.jpg);">
            <div class="container">
                <div class="page-banner-entry text-center">
                    <h1><span>About Us</span></h1>
                    <!-- Breadcrumb row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- Inner Banner -->

        <!-- About US -->
        <section class="section-area section-sp3 about-wraper2 bg-gray"
            style="background-image: url(images/background/bg1.png); background-repeat:no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 text-center">
                        <div class="heading-bx text-center">
                            <h6 class="title-ext text-primary">About Us</h6>
                            <h2 class="title mb-0">About The Armour Lab</h2>
                        </div>
                        <div class="about-content text-center">
                            <div class="ttr-media">
                                <img src="images/about/about-car.png" alt="">
                            </div>
                            <div class="content-info">
                                <div class="content-left">
                                    <div class="service-content">
                                        <h6 class="title">Icon Rocklear</h6>
                                    </div>
                                    <div class="service-content">
                                        <h6 class="title">PPF</h6>
                                    </div>
                                    <div class="service-content">
                                        <h6 class="title">Ceramic Coating </h6>
                                    </div>
                                </div>
                                <div class="content-right">
                                    <div class="service-content">
                                        <h6 class="title">Window Tints</h6>
                                    </div>
                                    <div class="service-content">
                                        <h6 class="title">Durability</h6>
                                    </div>
                                    <div class="service-content">
                                        <h6 class="title">Precision</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="text-center fs-4">
                    
                    <div class="py-5">
                        <h2>Our History</h2>
                        Founded in 2014 by Shawn, a visionary with a profound respect for automotive care, The Armour Lab
                        began its journey to
                        redefine vehicle protection. What started as a specialized service in Paint Protection Film (PPF)
                        and ceramic coatings has
                        expanded to include premium window tinting, catering to a growing clientele seeking comprehensive
                        protection solutions
                    </div>
                    <h4>Our Growth Story</h4>
                    <p class="pb-5">
                        The Armour Lab has evolved significantly since its doors first opened. Our reputation for excellence
                        in PPF, ceramic coatings,
                        and window tints has been built on a foundation of precision, durability, and aesthetic enhancement.
                        We have grown from a
                        passionate local start-up to a leading name in the industry, continuously adapting and expanding our
                        services to meet the needs of
                        car enthusiasts and everyday drivers alike.
                    </p>
                    <h4>Leading the Industry</h4>
                    <p class="pb-5">
                        As a premier company in the industry, we pride ourselves on setting benchmarks for quality and
                        service. Our technicians are
                        trained in the latest application techniques, ensuring each vehicle receives the finest treatment
                        with results that speak for
                        themselves.
                    </p>
                    <h4>Expanding with Icon Rocklear</h4>
                    <p class="pb-5">
                        In our commitment to offering the most advanced vehicle protection solutions, we proudly acquired
                        the license for <strong>Icon
                            Rocklear</strong>, a rapidly growing, cutting-edge coating technology. Icon Rocklear has quickly become one
                        of our most in-demand
                        services due to its unmatched durability, correction capabilities, and 15-year lifespan. We take
                        immense pride in being a certified
                        installer of this revolutionary product, providing our clients with the ultimate protection for
                        their vehicles.
                    </p>
                </div>

            </div>
        </section>

        <!-- Services -->
        @include('frontend.partials.home-services')


        <section class="container py-5">
            <div class="text-center fs-4 my-5">
                <h2>Our Commitment</h2>
                <p>
                    Commitment to Excellence Our commitment goes beyond the vehicles we protect; it's about fostering trust
                    and
                    delivering a service experience that exceeds expectations. At The Armour Lab, every vehicle is a
                    testament
                    to our dedication to quality.
                </p>
                <p>
                    Join Our Community Become a part of The Armour Lab family and experience the peace of mind that comes
                    with knowing your vehicle is protected by the best in the business. We invite you to visit us and see
                    firsthand why our combination of expert services, customer care, and relentless pursuit of perfection
                    makes us the preferred choice for vehicle protection.


                </p>
            </div>
            <div style="background: linear-gradient(25deg, #171a1e 50%, #43491a 50%);" class="text-center fs-4  text-white">
                <div style="max-width:750px;" class="mx-auto py-5">
                    <h2>Our Mission</h2>
                    <p>
                        We at the Armour Lab dedicate our professionalism to formulating the best protection plan for you
                        and
                        your investments. Life is hectic, accidents are unavoidable and maintaining your assets like the day
                        you
                        bought them is practically impossible. With our team of ceramic coating experts, we are here to turn
                        your everyday assets into an easy, maintainable and enjoyable investment.
                    </p>
                    <h4>
                        <i>Let us make your daily routine a hassle-free environment! </i>
                    </h4>
                    <a class="btn btn-primary my-5" href="{{ route('frontend.contact') }}">Contact Us</a>
                </div>

            </div>
        </section>

        <!-- Why Choose us -->

        @include('frontend.partials.why-choose-us')

        <!-- Portfolio -->
        @include('frontend.partials.home-gallery')


        <!-- Appointment Form -->
        @include('frontend.partials.home-contact')


        <!-- Testimonial -->
        @include('frontend.partials.testemonials')


        <!-- Blog -->
        @include('frontend.partials.home-blogs', ['blogDetails' => $blogDetails])

    </div>
@endsection

@section('scripts')
@endsection
