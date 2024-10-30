@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB  (Icon Rocklear)') }}
@endsection

@section('css')
    <meta name="description"
        content="Servicing the Greater Toronto Area for 15 years, The Armour Lab enhances your vehicle's durability and shine with leading automotive protection services. Specializing in Icon Rocklear,  Paint Protection Films (PPF), and Ceramic Coatings, we safeguard your vehicle against environmental damages and UV rays. Trust our experienced technicians to elevate your vehicle's resilience and aesthetics with the latest industry technologies. For superior automotive care, visit The Armour Lab.">


    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content= "website" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="THE ARMOUR LAB" />
    <meta property="og:image" itemprop="image primaryImageOfPage" content="{{ asset('images/logo.webp') }}" />
@endsection

@section('content')
    <div class="page-content bg-white">

        <!-- Main Slider -->
        <div class="ttr-slider style-2">
            <div class="swiper-container ttr-swiper01">
                <div class="swiper-wrapper">
                    {{-- <div class="swiper-slide">
                        <div class="slider-img slide-move" style="background-image:url(images/slider/slide1.jpg);">
                            <img src="images/slider/slide1.jpg" alt=""/>
                        </div>
                        <div class="slider-content container text-center text-white">
                            <div class="content-inner">
                                <h6 class="sub-title" data-swiper-parallax="-200">The Armour Lab</h6>
                                <h2 class="title" data-swiper-parallax="-400">Car Service</h2>
                                <div class="car-wheel"  data-swiper-parallax="-600">
                                    <img src="images/slider/car.png" style="filter: sepia(1);" alt="">
                                    <div class="wheel-1"><img src="images/slider/wheel.png" alt=""></div>
                                    <div class="wheel-2"><img src="images/slider/wheel.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="swiper-slide">
                        <div class="slider-img">
                            <img src="images/slider/slide3.jpg" alt="" />
                        </div>
                        <div class="slider-content container text-center text-white">
                            <div class="content-inner">
                                <h6 class="sub-title" data-swiper-parallax="-200">Welcome to The Armour Lab</h6>
                                <h2 class="title" data-swiper-parallax="-400">Your Trusted Experts in Advanced Vehicle Protection Solutions</h2>
                                <div class="car-wheel wheel2" data-swiper-parallax="-600">
                                    <img src="images/slider/car2.png" alt="">
                                    <div class="wheel-1"><img src="images/slider/wheel2.png" alt=""></div>
                                    <div class="wheel-2"><img src="images/slider/wheel2.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="section-14-bg"></div>
        <section class="section-14 ">
            <div class="section-container container">
                <h4 class="header-title-small">ICON</h4>
                <hr class="hr-light" />
                <h2 class="header-title text-white">ROCKKLEAR</h2>
                <div class="row row-reverse">
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <h6 class="open-text text-white">
                            Unlock the Future of Surface Protection with Icon Rocklear
                        </h6>
                        <div style="display:block;" class="openable-text">
                            <p>
                                Experience unparalleled durability with Icon Rocklear, the ultimate surface protection
                                technology. Designed for automotive, marine, and aviation, Icon Rocklear is 75x stronger and
                                35x thicker than other coatings. With zero maintenance and a lifetime warranty, ensure your
                                investment remains pristine.
                            </p>

                        </div>

                        <div class="cta-btns mt-5 mb-5">
                            {{-- <a href="{{ route('frontend.contact') }}" rel="noopener noreferrer">
                                <button class="cta-primary">INQUIRIES</button>
                            </a> --}}
                            <a href="{{ route('icon-rocklear.index') }}" rel="noopener noreferrer">
                                <button class="cta-primary">LEARN MORE</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="image-are">
                            <img loading="lazy" decoding="async" width="800" height="446" src="images/Group-26-5.png"
                                class="img-fluid" alt=""
                                srcset="
                    images/Group-26-5.png         818w,
                    images/Group-26-5-300x167.png 300w,
                    images/Group-26-5-768x428.png 768w
                  "
                                sizes="(max-width: 800px) 100vw, 800px" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonial -->
        @include('frontend.partials.testemonials')

        <!-- About US -->
        <section class="section-area section-sp1 bg-white"
            style="background-image: url(images/background/bg1.png); background-repeat:no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-40">
                        <div class="heading-bx mb-4">
                            <h6 class="title-ext text-primary">about Us</h6>
                            <h2 class="title">EXPERTS IN VEHICLE PAINT PROTECTION & LONG-LASTING
                                SHIELDING SOLUTIONS</h2>
                            <p>At The Armour Lab, we’re dedicated to preserving the beauty and integrity of your vehicle. With
                                over a decade of experience in the automotive protection industry, we specialize in safeguarding
                                your car against the elements. Our expert technicians use advanced technology to apply top-tier
                                Paint Protection Films (PPF) and Icon Rocklear, providing an unparalleled shield that defends
                                your vehicle from scratches, chips, and harmful UV rays. We ensure that your car not only shines
                                but remains protected for the long haul.</p>
                        </div>
                        <a href="{{ route('frontend.about') }}" class="btn btn-primary">About Us</a>
                    </div>
                    <div class="col-lg-7 mb-30">
                        <div class="about-media">
                            <div class="media">
                                <img src="images/male-worker-wrapping-car-with-ptotective-foil.jpg" alt="">
                            </div>
                            <div class="about-contact bg-primary text-white">
                                <span>Ready to elevate your vehicle's resilience and radiance?</span>
                                <br>
                                <h3 class="number mb-15 text-white"><a class="text-white" href="tel:(416) 675 6853">(416)
                                        675 6853</a> </h3>
                                <p class="mb-20"> Connect with our specialists or Book An Appointment for
                                    a consultation. Trust in The Armour Lab to add an invisible armour to your prized
                                    possession.</p>
                                <a href="{{ route('frontend.contact') }}" class="btn btn-light">BOOK AN APPOINTMENT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <style>
            /*
                            |--------------------------------------------------------------------------
                            | Section 14
                            |--------------------------------------------------------------------------
                            */
            :root {
                --e-global-color-primary: #cfb728;
                --e-global-color-secondary: #54595f;
                --e-global-color-text: #afafaf;
                --e-global-color-accent: #0d9344;
            }

            .section-14 {
                background-image: url(../images/bg0s.png);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                transition: background 0.3s, border 0.3s, border-radius 0.3s,
                    box-shadow 0.3s;
                padding-top: 70px;
                padding-bottom: 100px;
            }

            .section-14-bg {
                background-image: url(https://iconrocklear.com/wp-content/uploads/2023/08/Screenshot-at-Aug-27-16-17-58.png);
                background-position: top center;
                background-repeat: no-repeat;
                background-size: cover;
                transition: background 0.3s, border 0.3s, border-radius 0.3s,
                    box-shadow 0.3s;
                margin-top: -100px;
                margin-bottom: 0px;
                height: 84px;
                margin-top: 100px;
            }

            .section-14 .section-container {
                position: relative;
            }

            .section-14 h4 {
                font-family: "Montserrat", Sans-serif;
                font-size: 38px;
                font-weight: 800;
                text-transform: uppercase;
                fill: #ffffff;
                color: #ffffff;
                background-color: transparent;
                background-image: linear-gradient(90deg,
                        var(--e-global-color-primary) 3%,
                        var(--e-global-color-accent) 0%);
                border-style: solid;
                border-width: 1px 1px 1px 0px;
                border-color: #02010100;
                border-radius: 0px 0px 0px 0px;
                padding: 8px 18px 8px 12px;
                position: absolute;
                /* margin-bottom: 27px; */
                top: -43px;
                display: inline-block;
                z-index: 1;
            }

            .openable-text {
                padding: 10px 100px 10px 10px;
                border-top: 1px solid #d5d8dc;
                color: var(--e-global-color-text);
                font-size: 16px;
                display: none;
            }

            .open-text {
                font-weight: 700;
                cursor: pointer;
            }

            .section-14 .image-are {
                height: auto;
                max-width: 100%;
                border: none;
                border-radius: 0;
                box-shadow: none;
            }

            .header-title-small {
                color: #262626;
                font-family: "Montserrat", Sans-serif;
                font-size: 20px;
                font-weight: 900;
                margin-bottom: 10px;
                line-height: 1.4em;
            }

            .header-title {
                color: #262626;
                font-family: "Montserrat", Sans-serif;
                font-size: 96px;
                font-weight: 800;
                text-transform: uppercase;
                margin-bottom: 40px;
            }

            .customTab-custom .customTab.cta-primary {
                text-shadow: none;
                background-color: inherit;
            }

            .customTab-custom .customTab.cta-primary:hover {
                fill: #ffffff;
                color: #ffffff;
                background-color: transparent;
                background-image: linear-gradient(90deg,
                        var(--e-global-color-primary) 2%,
                        var(--e-global-color-accent) 0%);
            }

            @media screen and (max-width: 768px) {

                .header-title,
                .main-title {
                    font-size: 40px !important;
                    /* text-align: center; */
                    margin-top: 25px;
                }

                .header-title-small {
                    font-size: 16px !important;
                }
            }
        </style>

        



        <!-- Services -->
        {{-- @include('frontend.partials.home-services') --}}


        <!-- Why Choose us -->

        @include('frontend.partials.why-choose-us')

        <!-- Portfolio -->
        @include('frontend.partials.home-gallery')


        <!-- Appointment Form -->
        @include('frontend.partials.home-contact')






        <!-- Blog -->
        @include('frontend.partials.home-blogs', ['blogDetails' => $blogDetails])


    </div>
@endsection

@section('scripts')
@endsection
