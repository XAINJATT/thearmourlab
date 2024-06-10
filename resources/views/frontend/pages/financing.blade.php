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
                    <h1><span>Financing</span></h1>
                    <!-- Breadcrumb row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Financing</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>



        <section class="section-area section-sp1 bg-white"
            style="background-image: url(images/background/bg1.png); background-repeat:no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-30 mb-md-50">
                        <div class="heading-bx">
                            {{-- <h6 class="title-ext text-primary"></h6> --}}
                            <h2 class="title">Flexible Financing For Your Vehicles Protection</h2>
                            <p>Protecting and enhancing your vehicle with our premium paint protection film

                                and ceramic coating services is an investment in its longevity and beauty. While the

                                cost of these services can vary based on factors such as the make and model of your

                                vehicle and the specific products you choose, we are dedicated to making sure

                                our solutions are accessible and budget-friendly.

                                Our flexible financing options are tailored to accommodate different financial needs,

                                ensuring you can enjoy the benefits of our top-quality PPF and ceramic coatings

                                without worrying about immediate financial constraints. We're here to work with

                                you to find a payment plan that suits your situation, making it easier and more

                                manageable to invest in the best care for your vehicle</p>
                        </div>
                        <div class="row">
                            {{-- <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6">
                                <div class="counter-style-1">
                                    <div class="text-secondry">
                                        <h2 class="text-primary"><span class="counter">25</span><span>K</span></h2>
                                    </div>
                                    <h5 class="counter-text">SATISFIED CLIENTS</h5>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6">
                                <div class="counter-style-1">
                                    <div class="text-secondry">
                                        <h2 class="text-primary"><span class="counter">35</span><span>+</span></h2>
                                    </div>
                                    <h5 class="counter-text">WINNING AWARDS</h5>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-4 col-sm-12">
                                <div class="counter-style-1">
                                    <div class="text-secondry">
                                        <h2 class="text-primary"><span class="counter">180</span><span>+</span></h2>
                                    </div>
                                    <h5 class="counter-text">COMPLETED WORKS</h5>
                                </div>
                            </div> --}}
                        </div>
                        <div class="mt-10 mt-md-0">
                            <a href="https://www.financeit.ca/s/vSeB6A" target="_blank" class="btn btn-primary me-3">
                            Apply Now
                            </a>
                                <br>
                                
                            <span class="mt-10 mt-md-0 d-block">Pre-qualification won't affect your credit score</span>
                            {{-- <a href="booking.html" class="btn btn-outline-secondary">Book Now</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="about-imgbox">
                            <video autoplay style="height:70vh" loop muted class="mb-10" width="100%"
                            src="{{ asset('images/fp/phone-animation-en.mp4') }}"></video>
                            {{-- <img src="{{ asset('images/f109259399cc4040a3b1aca1830b8041.webp') }}" alt="" /> --}}
                            {{-- <div class="about-year">
                                <h2 class="count"><span class="counter">20</span>+</h2>
                                <h6 class="text">Year In industry</h6>
                                <a href="https://www.youtube.com/watch?v=PkkV1vLHUvQ" class="popup-youtube videoplay-bx"><i
                                        class="fa fa-play"></i> <span>Play Video</span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <style>
            .section-sp2 {
                margin-bottom: 100px !important;
            }

            .blog-wraper1:after,
            .service-wraper1:after {
                display: none
            }
        </style>

        <section class="section-area bg-primary service-wraper1 section-sp2"
            style="background-image: url(images/background/bg2.png); background-repeat: no-repeat; background-position:right top;">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-wrap py-5 align-items-center">
                            <img style="max-height:250px"
                                src="{{ asset('images/png-transparent-interest-rate-offer-text-trademark-payment-removebg-preview.webp') }}"
                                class="img-fluid pb-5" alt="">
                                <div class="text-white px-3">
                                    <p class="fs-4 fw-bold">
                                        NO INTEREST
                                    </p>
                                    <hr>
                                    <p class="fs-4 fw-bold">
                                        12 EQUAL MONTHLY PAYMENTS!
                                    </p>
                                </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="text-white"
                            style=" background: linear-gradient(25deg, #171a1e 50%, #43491a 50%); padding:40px">
                            <p class="fs-2 fw-bold">
                                Catering to Your Financial Needs: Accessible Financing for Premier PPF and Ceramic Coating
                                Services
                            </p>
                        </div>
                    </div> --}}

                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-center">
                            <a target="_blank" href="https://www.financeit.ca/s/vSeB6A">
                                <img height="250" style="height:300px;"
                                    src="{{ asset('images/250x250-financing-available-A.webp') }}" class="img-fluid"
                                    alt="">
                            </a>

                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section style="margin-bottom:100px" class="">
            <div class="container">

                <div class="row align-items-center gap-3">

                    <div class="col-lg-5">
                        <div class="text-white p-4"
                            style=" background: linear-gradient(25deg, #171a1e 50%, #43491a 50%); padding:40px">
                            <p class="fs-2 fw-bold">
                                Vehicle Protection Financing
                            </p>
                            <p style="padding:0px 0 15px;">
                                We recognize that the cost is a significant consideration when choosing PPF and ceramic
                                coating services. Therefore, we endeavor to make our vehicle protection solutions as
                                affordable as possible.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <a target="_blank" href="https://www.financeit.ca/s/vSeB6A">
                                <img height="250" style="height:300px;"
                                    src="{{ asset('images/250x250-financing-available-A.webp') }}" class="img-fluid"
                                    alt="">
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <section style="margin-bottom:100px" class="">

            <div class="container">




                <div>
                    <div style="max-width:770px; margin:auto" class="heading-bx text-center ">
                        {{-- <h6 class="title-ext text-primary"></h6> --}}
                        <h2 class="title">Discover Your Vehicle Protection Options</h2>
                        <p>Our expert team is ready to discuss your specific needs and explain the costs associated with our
                            PPF and ceramic coating services, helping you make an informed decision.</p>
                    </div>


                    <div class="table-image" style="margin-bottom:100px">
                        <img src="{{ asset('images/financing_options_chart_army_green.png') }}" class="img-fluid"
                            alt="">
                        <p class="text-center">Purchase amount is approximate and may vary based on service selection and vehicle specifics. The
                            examples shown in the table are for illustrative purposes only. The maximum amount available for
                            financing is $10,000. 0% interest plans are offered exclusively on select PPF and ceramic
                            coating
                            services and cannot be combined with other offers or discounts. Financing is subject to credit
                            approval by our financing partners</p>
                    </div>

                    <div style="max-width:770px; margin:auto" class="mt-15 mt-md-0">
                        <div class="widget">
                            <div class="help-bx">
                                <div class="media">
                                    {{-- <img src="images/about/pic3.jpg" alt="" /> --}}
                                </div>
                                <div class="info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 476 476">
                                        <path d="M400.85,181v-18.3c0-43.8-15.5-84.5-43.6-114.7c-28.8-31-68.4-48-111.6-48h-15.1c-43.2,0-82.8,17-111.6,48 c-28.1,30.2-43.6,70.9-43.6,114.7V181c-34.1,2.3-61.2,30.7-61.2,65.4V275c0,36.1,29.4,65.5,65.5,65.5h36.9c6.6,0,12-5.4,12-12
                                   V192.8c0-6.6-5.4-12-12-12h-17.2v-18.1c0-79.1,56.4-138.7,131.1-138.7h15.1c74.8,0,131.1,59.6,131.1,138.7v18.1h-17.2
                                   c-6.6,0-12,5.4-12,12v135.6c0,6.6,5.4,12,12,12h16.8c-4.9,62.6-48,77.1-68,80.4c-5.5-16.9-21.4-29.1-40.1-29.1h-30
                                   c-23.2,0-42.1,18.9-42.1,42.1s18.9,42.2,42.1,42.2h30.1c19.4,0,35.7-13.2,40.6-31c9.8-1.4,25.3-4.9,40.7-13.9
                                   c21.7-12.7,47.4-38.6,50.8-90.8c34.3-2.1,61.5-30.6,61.5-65.4v-28.6C461.95,211.7,434.95,183.2,400.85,181z M104.75,316.4h-24.9
                                   c-22.9,0-41.5-18.6-41.5-41.5v-28.6c0-22.9,18.6-41.5,41.5-41.5h24.9V316.4z M268.25,452h-30.1c-10,0-18.1-8.1-18.1-18.1
                                   s8.1-18.1,18.1-18.1h30.1c10,0,18.1,8.1,18.1,18.1S278.25,452,268.25,452z M437.95,274.9c0,22.9-18.6,41.5-41.5,41.5h-24.9V204.8
                                   h24.9c22.9,0,41.5,18.6,41.5,41.5V274.9z" />
                                    </svg>
                                    <h5 class="title mt-20">How Can We Help</h5>
                                    <p>If you need any helps, please free to contact us.</p>
                                    {{-- <form action="{{ route('frontend.contact.store') }}" id="addDriverForm"
                                        class="contact-form style1" method="post" enctype="multipart/form-data">
                                        @csrf
                                        {{-- <div class="heading-bx mb-4 text-white">
                                            <h6 class="title-ext text-white">Contact Form</h6>
                                            <h3 class="title mb-0">DO YOU HAVE ANY<br /> QUESTIONS</h3>
                                        </div> --} }
                                        <div class="ajax-message"></div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group  mb-3">
                                                    <div class="input-group">
                                                        <input name="name" type="text" required
                                                            class="form-control valid-character" placeholder="Your Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group  mb-3">
                                                    <div class="input-group">
                                                        <input name="email" type="email" class="form-control"
                                                            required placeholder="Your Email Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class="input-group">
                                                        <input name="phone" type="text" required
                                                            class="form-control int-value" placeholder="Your Phone">
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
                                                <button type="submit" name="submit" class="btn btn-secondary btn-lg">
                                                    Send Message
                                                </button>
                                            </div>
                                        </div>
                                    </form> --}}

                                    <script type="text/javascript" src="https://form.jotform.com/jsform/241586322618055"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </div>
@endsection

@section('scripts')
@endsection
