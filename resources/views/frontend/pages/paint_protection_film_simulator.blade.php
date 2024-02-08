@extends('frontend.layout.app')

@section('title')
    {{ __('Paint Protection Film By The Armour Lab') }}
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="secure/css/shoppingfef6.css?t=1696719147777">
    <link rel="stylesheet" href="web-assets/css/customfef6.css?t=1696719147777"> --}}
    <style>
        .slide__button-download {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="page-content bg-white">

        <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="page-banner-entry text-center">
                    <h1><span>@lang("messages.PAINT PROTECTION FILM")</span></h1>
                    <!-- Breadcrumb row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>@lang("messages.Home") > </a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang("messages.PAINT PROTECTION FILM")</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>


        <div class="container my-5">




            <div class="row">

                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-xl-6">
                            <h2 class="mb-4 text-right">@lang("messages.Signature Features")</h2>
                        </div>
                        <div class="mb-3 col-xl-6">
                            <h4 class=""><i class="fas fa-sync-alt mr-2"></i> @lang("messages.Thermally Responsive Healing Layer")</h4>
                            <p class="">@lang("messages.Our film is crafted from a cutting-edge elastomeric polyurethane that automatically mends minor abrasions and fine lines with a gentle application of heat.")</p>
                        </div>

                        <div class="mb-3 col-xl-6">
                            <h4 class="text-right"><i class="fas fa-sun mr-2"></i> @lang("messages.Resistant to UV-Induced Discolouration")
                            </h4>
                            <p class="text-right">
                                @lang("messages.The advanced formula of our film is designed to remain transparent and not succumb to yellowing from UV radiation, keeping protected areas imperceptible.")
                            </p>
                        </div>

                        <div class="mb-3 col-xl-6">
                            <h4 class=""><i class="fas fa-shield-alt mr-2"></i> @lang("messages.Stain and Discolouration Defence")</h4>
                            <p class="">@lang("messages.Bid farewell to worries of imperfections or blemishes from environmental aggressors. Our superior film is robust against stains and maintains its transparent quality even in the most challenging environments.")
                            </p>
                        </div>

                        <div class="mb-3 col-xl-6">
                            <h4 class="text-right"><i class="fas fa-hammer mr-2"></i> @lang("messages.Robust Protection from Wear")</h4>
                            <p class="text-right">
                                @lang("messages.Our film acts as a shield against the everyday road hazards like gravel impacts and surface nicks, ensuring your car retains its showroom-quality appearance.")
                            </p>
                        </div>

                        <div class="mb-3 col-xl-6">
                            <h4 class=""><i class="fas fa-check-circle mr-2"></i> @lang("messages.Enhanced Adhesion Edge Technology")
                            </h4>
                            <p class="">@lang("messages.Our film's innovative Edge Adhesion Technology means edges stay firmly in place, preventing any lift or separation while keeping your vehicle’s surfaces pristine and unblemished.")</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="ttr-media mb-30">
                        <video autoplay style="height:70vh" loop muted class="mb-10" width="100%"
                            src="{{ asset('videos/ppf/Sequence 04.mp4') }}"></video>
                    </div>
                </div>

            </div>

            {{-- <div class="container">
                
            </div> --}}

            {{-- <video autoplay style="height:70vh" loop muted class="mb-10" width="100%" src="{{asset("videos/ppf/AdobeStock_472013279.mov")}}"></video> --}}
        </div>








        <section class="section-area bg-white section-sp1">
            <div class="container">

                <h2 class="text-center">@lang("messages.Paint Protection Packages")</h2>

                <div class="pricingtable-row my-5">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-30">
                            <div class="pricingtable-wrapper style1">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-main">
                                        <div class="pricingtable-price">
                                            <img class="img-fluid w-100" src="{{ asset('images/BRONZE.png') }}"
                                                alt="">
                                            <span>@lang("messages.Starting From")</span><br>
                                            <div class="text-center">
                                                <span class="priceing-doller">$</span>
                                                <span class="pricingtable-bx">449</span>
                                            </div>
                                        </div>
                                        <div class="pricingtable-title">
                                            <h4 class="text-center">@lang("messages.BRONZE")</h4>
                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                        </div>
                                    </div>
                                    <ul class="pricingtable-features">
                                        <li><i class="fa fa-check"></i> 18″ @lang("messages.Hood & Fenders")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Side View Mirrors")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Headlights")</li>
                                        <!-- <li><i class="fa fa-check"></i> Trunk Stripe</li> -->
                                    </ul>
                                    <div class="pricingtable-footer">
                                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary">@lang("messages.Get It Now")</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-30">
                            <div class="pricingtable-wrapper style1 ">
                                <!-- <div class="pricingtable-tag">
                                                    most used
                                                </div> -->
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-main">
                                        <div class="pricingtable-price">
                                            <img class="img-fluid w-100" src="{{ asset('images/SILVER.png') }}"
                                                alt="">
                                            <span>@lang("messages.Starting From")</span><br>
                                            <div class="text-center">
                                                <span class="priceing-doller">$</span>
                                                <span class="pricingtable-bx">999</span>
                                            </div>
                                        </div>
                                        <div class="pricingtable-title">
                                            <h4 class="text-center">@lang("messages.SILVER")</h4>
                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                        </div>
                                    </div>
                                    <ul class="pricingtable-features">
                                        <li><i class="fa fa-check"></i> 18″ @lang("messages.Hood & Fenders")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Side View Mirrors")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Headlights and Fog lights")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Full Front Bumper")</li>
                                    </ul>
                                    <div class="pricingtable-footer">
                                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary">@lang("messages.Get It Now")</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-30">
                            <div class="pricingtable-wrapper style1 pricingtable-highlight">
                                <div class="pricingtable-tag">
                                    @lang("messages.most used")
                                </div>
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-main">
                                        <div class="pricingtable-price">
                                            <img class="img-fluid w-100" src="{{ asset('images/GOLD.png') }}"
                                                alt="">
                                            <span>@lang("messages.Starting From")</span><br>
                                            <div class="text-center">
                                                <span class="priceing-doller">$</span>
                                                <span class="pricingtable-bx">1799</span>
                                            </div>
                                        </div>
                                        <div class="pricingtable-title">
                                            <h4 class="text-center">@lang("messages.GOLD")</h4>
                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                        </div>
                                    </div>
                                    <ul class="pricingtable-features">
                                        <li><i class="fa fa-check"></i> @lang("messages.Full Front Bumper")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Full Hood")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Full Fenders")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Side View Mirrors")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Headlights and Fog lights")</li>
                                        {{-- <li><i class="fa fa-check"></i> @lang("messages.Trunk Stripe")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.A-Pillars")</li> --}}
                                    </ul>
                                    <div class="pricingtable-footer">
                                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary">@lang("messages.Get It Now")</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-30">
                            <div class="pricingtable-wrapper style1">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-main">
                                        <div class="pricingtable-price">

                                            <img class="img-fluid w-100" src="{{ asset('images/PLATINUM.png') }}"
                                                alt="">
                                            <span>@lang("messages.Starting From")</span><br>
                                            <div class="text-center">
                                                <span class="priceing-doller">$</span>
                                                <span class="pricingtable-bx">4499</span>
                                            </div>
                                        </div>
                                        <div class="pricingtable-title">
                                            <h4 class="text-center">@lang("messages.PLATINUM")</h4>
                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                        </div>
                                    </div>
                                    <ul class="pricingtable-features">
                                        <li><i class="fa fa-check"></i> @lang("messages.Entire Front Bumper")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Entire Rear Bumper")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Full Hood")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Front of Roof") </li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Full Trunk Lid")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Entire Driver's Side (includes doors, fenders, quarter panels)")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Entire Passenger's Side (includes doors, fenders, quarter panels)")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Side View Mirrors")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Headlights and Fog lights")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Full A-Pillars")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Full Rocker Panels")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Rear Wheel Arches/Fenders")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Door Handles")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Door Edges")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Rear Spoiler/Wing (if applicable)")</li>
                                        <li><i class="fa fa-check"></i> @lang("messages.Full Rear Roof (if separate from the front of the roof)")</li>
                                        {{-- <li><i class="fa fa-check"></i> Select</li> --}}
                                    </ul>
                                    <div class="pricingtable-footer">
                                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary">@lang("messages.Get It Now")</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2>
                    @lang("messages.ADD-ON COVERAGE OPTIONS")
                    </h2>
                    <div class="row my-5">
                        <div class="col-lg-4 col-md-6 col-sm-6 ">
                            <div class="product-item bg-light mb-4 p-3 pt-5 ">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('images/trunk-strip.webp') }}"
                                        alt="">
                                    <div class="product-action">
                                        <!-- Add any product action buttons or links here -->
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="#">@lang("messages.TRUNK STRIP")</a>

                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <span>@lang("messages.Starting From")</span>&nbsp;&nbsp; <h5>$150 </h5>
                                        <h6 class="text-muted ml-2"></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <!-- Average star rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ">
                            <div class="product-item bg-light mb-4 p-3 pt-5 ">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('images/rocker-panel.webp') }}"
                                        alt="">
                                    <div class="product-action">
                                        <!-- Add any product action buttons or links here -->
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="#">@lang("messages.ROCKER PANEL")</a>
                                    <span>@lang("messages.( Per side )")</span>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <span>@lang("messages.Starting From")</span>&nbsp;&nbsp; <h5>$150</h5>
                                        <h6 class="text-muted ml-2"></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <!-- Average star rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ">
                            <div class="product-item bg-light mb-4 p-3 pt-5 ">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('images/headlight.webp') }}"
                                        alt="">
                                    <div class="product-action">
                                        <!-- Add any product action buttons or links here -->
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="#">@lang("messages.HEADLIGHT")</a>
                                    <span>@lang("messages.( Per side )")</span>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <span>@lang("messages.Starting From")</span>&nbsp;&nbsp; <h5>$75</h5>
                                        <h6 class="text-muted ml-2"></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <!-- Average star rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ">
                            <div class="product-item bg-light mb-4 p-3 pt-5 ">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('images/bumper.webp') }}" alt="">
                                    <div class="product-action">
                                        <!-- Add any product action buttons or links here -->
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="#">@lang("messages.BUMPER")</a>

                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <span>@lang("messages.Starting From")</span>&nbsp;&nbsp; <h5>$600</h5>
                                        <h6 class="text-muted ml-2"></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <!-- Average star rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ">
                            <div class="product-item bg-light mb-4 p-3 pt-5 ">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('images/full-hood.webp') }}"
                                        alt="">
                                    <div class="product-action">
                                        <!-- Add any product action buttons or links here -->
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="#">@lang("messages.Full Hood")</a>

                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <span>@lang("messages.Starting From")</span>&nbsp;&nbsp; <h5>$600</h5>
                                        <h6 class="text-muted ml-2"></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <!-- Average star rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ">
                            <div class="product-item bg-light mb-4 p-3 pt-5 ">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('images/a-pillar.webp') }}"
                                        alt="">
                                    <div class="product-action">
                                        <!-- Add any product action buttons or links here -->
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="#">@lang("messages.A-PILLARS AND FRONT OF ROOF")</a>

                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <span>@lang("messages.Starting From")</span>&nbsp;&nbsp; <h5>$199</h5>
                                        <h6 class="text-muted ml-2"></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <!-- Average star rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6 col-sm-6 ">
                                            <div class="product-item bg-light mb-4 p-3 pt-5 ">
                                                <div class="product-img position-relative overflow-hidden">
                                                    <img class="img-fluid w-100" src="{{ asset('images/18-inch-hood.webp') }}"
                                                        alt="">
                                                    <div class="product-action">
                                                    </div>
                                                </div>
                                                <div class="text-center py-4">
                                                    <a class="h6 text-decoration-none text-truncate" href="#">18'' HOOD AND
                                                        FENDERS</a>
                                                    
                                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                                        <h5>$99</h5>
                                                        <h6 class="text-muted ml-2"></h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 ">
                                            <div class="product-item bg-light mb-4 p-3 pt-5 ">
                                                <div class="product-img position-relative overflow-hidden">
                                                    <img class="img-fluid w-100" src="{{ asset('images/24-inch-hood.webp') }}"
                                                        alt="">
                                                    <div class="product-action">
                                                    </div>
                                                </div>
                                                <div class="text-center py-4">
                                                    <a class="h6 text-decoration-none text-truncate" href="#">24'' HOOD AND
                                                        FENDERS</a>
                                                    
                                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                                        <h5>$99</h5>
                                                        <h6 class="text-muted ml-2"></h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <div id="main" role="main" class="vamtam-main layout-full">
            <iframe id="ifr" width="100%"
                src="https://llumar.com/na/en/automotive/window-film-ppf-viewer/dealer-auto-ppf-viewer/" height="1000px"
                frameborder="0"></iframe>
        </div>


        <div style=" background: linear-gradient(25deg, #171a1e 50%, #43491a 50%); padding:100px 40px">
            <div class="container">
                <div class="row text-center text-white">
                    <h2 class="my-3">@lang("messages.Paint Protection Film By The Armour Lab")</h2>
                    <p>@lang("messages.Your vehicle is a treasured asset. In the diverse climates of Canada, it's crucial to defend it against the elements to maintain its pristine condition. The Armour Lab’s bespoke Paint Protection Film (PPF) is your vehicle's shield, preserving its surface and bolstering its resale value with ease and peace of mind.")</p> <br>
                    <p>@lang("messages.Enjoy the enduring brilliance of your vehicle's finish with our ultra-clear, virtually invisible protective film. It stands guard against scratches, stains from road debris, discolouration, rust, and paint chips, mitigating the need for expensive touch-ups. Our film facilitates effortless cleaning, ensuring that environmental contaminants like wind-borne dirt, snow, and other pollutants never compromise your car’s luster.")</p> <br>
                    <p>@lang("messages.At The Armour Lab, we are experts in delivering transparent paint protection at competitive rates, backed by a solid 10-year warranty. Our state-of-the-art urethane film is your car's armour against the relentless assault of salt, stains, tar, grime, rock chips, and acidic contaminants.")</p>
                    <br>
                    <p>@lang("messages.Featuring cutting-edge self-healing properties, it effortlessly erases surface scratches before your eyes. Should the time come for removal, trust our skilled technicians to do so with precision, returning your car to its original glory as if the film was never there.")</p> <br>
                    <p>@lang("messages.Dedicated to meticulous service and customer satisfaction, The Armour Lab has earned a reputation as a premier car care destination in our community. We invite you to experience our acclaimed, tailor-made, precision-cut PPF installation. Protect your automotive investment with The Armour Lab and enjoy a lasting, protected sheen. Contact us for a personalized quote and safeguard your vehicle today.")</p> <br>
                </div>
            </div>
        </div>

        <div class="mb-10">
            <!-- Portfolio -->



            <section class="section-area">
                <div class="portfolio-carousel owl-none owl-carousel magnific-image">
                    @foreach (get_ppf_media() as $image)
                        <div class="item">
                            <div class="portfolio-box style-1">
                                <div class="media">
                                    <img style="height: 300px; object-fit: cover;" lazyloading="true"
                                        src="{{ Storage::url($image->path) }}" alt="">
                                    <div class="portfolio-overlay">
                                        <ul>
                                            {{-- <li><a href="#" class="ttr-icon"><i class="la la-link"></i></a> --}}
                                            </li>
                                            <li><a href="{{ Storage::url($image->path) }}"
                                                    class="magnific-anchor ttr-icon"><i class="la la-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <h5 class="title">
                                        <a href="#">
                                            <i class="flaticon-fuel-1"></i> @lang("messages.Paint Protection Film")
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>

        <div style="max-width:750px; margin:auto;" class="container">

            <div class="my-5">
                <h2>@lang("messages.Paint Protection Film FAQs")</h2>
                @include('frontend.partials.paint-protection-faq', ['show' => true])
            </div>

            <div class="widget">
                <div class="help-bx">
                    <div class="media">
                        {{-- <img src="images/about/pic3.jpg" alt="" /> --}}
                    </div>
                    <div class="info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 476 476">
                            <path d="M400.85,181v-18.3c0-43.8-15.5-84.5-43.6-114.7c-28.8-31-68.4-48-111.6-48h-15.1c-43.2,0-82.8,17-111.6,48 c-28.1,30.2-43.6,70.9-43.6,114.7V181c-34.1,2.3-61.2,30.7-61.2,65.4V275c0,36.1,29.4,65.5,65.5,65.5h36.9c6.6,0,12-5.4,12-12
                                   V192.8c0-6.6-5.4-12-12-12h-17.2v-18.1c0-79.1,56.4-138.7,131.1-138.7h15.1c74.8,0,131.1,59.6,131.1,138.7v18.1h-17.2
                                   c-6.6,0-12,5.4-12,12v135.6c0,6.6,5.4,12,12,12h16.8c-4.9,62.6-48,77.1-68,80.4c-5.5-16.9-21.4-29.1-40.1-29.1h-30
                                   c-23.2,0-42.1,18.9-42.1,42.1s18.9,42.2,42.1,42.2h30.1c19.4,0,35.7-13.2,40.6-31c9.8-1.4,25.3-4.9,40.7-13.9
                                   c21.7-12.7,47.4-38.6,50.8-90.8c34.3-2.1,61.5-30.6,61.5-65.4v-28.6C461.95,211.7,434.95,183.2,400.85,181z M104.75,316.4h-24.9
                                   c-22.9,0-41.5-18.6-41.5-41.5v-28.6c0-22.9,18.6-41.5,41.5-41.5h24.9V316.4z M268.25,452h-30.1c-10,0-18.1-8.1-18.1-18.1
                                   s8.1-18.1,18.1-18.1h30.1c10,0,18.1,8.1,18.1,18.1S278.25,452,268.25,452z M437.95,274.9c0,22.9-18.6,41.5-41.5,41.5h-24.9V204.8
                                   h24.9c22.9,0,41.5,18.6,41.5,41.5V274.9z" />
                        </svg>
                        <h5 class="title mt-20">@lang("messages.How Can We Help")</h5>
                        <p>@lang("messages.If you need any helps, please free to contact us.")</p>
                        <form action="{{ route('frontend.contact.store') }}" id="addDriverForm"
                            class="contact-form style1" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="heading-bx mb-4 text-white">
                                <h6 class="title-ext text-white">@lang("messages.")Contact Form</h6>
                                <h3 class="title mb-0">@lang("messages.DO YOU HAVE ANY")<br /> @lang("messages.QUESTIONS")</h3>
                            </div> --}}
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
                                            <input name="email" type="email" class="form-control" required
                                                placeholder="Your Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <div class="input-group">
                                            <input name="phone" type="text" required class="form-control int-value"
                                                placeholder="Your Phone">
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
                                        @lang("messages.Send Message")
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#ifr').ready(function() {
                $('#ifr').contents().find('body').html('Hey, i`ve changed content of <body>! Yay!!!');
            });
        });

        // $(document).ready(function () {
        //     setTimeout(() => {
        //         $("#main iframe").attr("src",)
        //     }, 1000);
        // });
    </script>
@endsection
