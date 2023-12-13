@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
    <link rel="stylesheet" href="secure/css/shoppingfef6.css?t=1696719147777">
    <link rel="stylesheet" href="web-assets/css/customfef6.css?t=1696719147777">
    <style>
        #output,
        #output .product,
        #output #base {
            height: 370px;
        }

        @media (max-width: 1200px) {

            #output,
            #output .product,
            #output #base {
                height: 170px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="page-content bg-white">
        <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="page-banner-entry text-center">
                    <h1><span>Window Tint</span></h1>
                    <!-- Breadcrumb row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Window Tint</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb row END -->
                </div>

            </div>
        </div>

        <section class="section-area">
            <div class="container">
                <div class="row">
                    <div id="main-container">


                        <div class="container mt-5">
                            <div class="header row my-5 py-5">
                                <h2 class="col-md-6">Signature Features</h2>
                                <div class="col-md-6">
                                    <div class="d-flex gap-3 align-items-center">
                                        <img class="img-fluid text-right" height="200" style="height:150px !important"
                                            src="{{ asset('images/SCF-SEAL_NonSunscreens-2-color-516x600.jpg') }}"
                                            alt="">
                                        <span>
                                            Endorsed by the
                                            Skin Cancer Foundation:
                                            Our window tints meet
                                            the rigorous standards for
                                            effective UV protection,
                                            helping to safeguard your
                                            skin's health with every
                                            drive.
                                        </span>

                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h4 class=""> <i class="fas fa-atom text-warning"></i> &nbsp;&nbsp;&nbsp; Ceramic
                                        Particle Technology</h4>
                                    <p>Contains a proprietary blend of ceramic particles to act as a solid barrier to heat
                                        while maintaining the ease of install in a 1.5 mil construction.</p>
                                </div>
                                <div class="col-md-6">
                                    <h4> <i class="fas fa-sun text-warning"></i> &nbsp;&nbsp;&nbsp; UV Ray Protection</h4>
                                    <p>Nano-Ceramic Film like PRIME XR PLUS provides SPF 1,000 protection that effectively
                                        blocks over 99% of harmful UV rays that can lead to numerous skin cancers, premature
                                        aging and skin cell damage.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4><i class="fas fa-eye text-warning"></i> &nbsp;&nbsp;&nbsp; Greater Clarity</h4>
                                    <p>In the past, keeping cool meant choosing a darker shade of tint. The multilayer
                                        nano-ceramic construction provides ultra-high performance without reducing outbound
                                        visibility.</p>
                                </div>
                                <div class="col-md-6">
                                    <h4><i class="fas fa-wifi text-warning"></i>&nbsp;&nbsp;&nbsp; Crystal Clear Signal</h4>
                                    <p>In a digital world, clear communication is key. Ceramic Window Tint construction will
                                        not interfere with radio, cellular, or bluetooth signals.</p>
                                </div>
                            </div>

                            <!-- Heading Section -->
                            <div class="row mb-4 py-5">
                                <div class="col">
                                    <h1 class="text-center">Vehicle Window Tinting by The Armour Lab</h1>
                                    <h2 class="text-center text-muted">Elevate Protection, Elevate Style</h2>
                                </div>
                            </div>

                            <!-- Content Section -->
                            <div style=" background: linear-gradient(25deg, #171a1e 50%, #43491a 50%); padding:40px"
                                class="row g-5 mb-3 text-white">
                                <div class="col-xl-6">
                                    <h3>At The Armour Lab</h3>
                                    <p class="text-white">Our automotive window tinting services not only enhance the look
                                        of your vehicle but
                                        also offer a fortress of protection. Our superior tinting solutions significantly
                                        block UV rays, safeguarding your vehicle's interior. This means that the delicate
                                        fabrics and materials inside your car, like the dashboard and upholstery, are
                                        preserved from the sun's relentless glare, maintaining their integrity and colour
                                        for years to come.</p>
                                </div>
                                <div class="col-xl-6">
                                    <h3>The Science Behind Our Tinting</h3>
                                    <p class="text-white">Tinting involves adhering a micro-thin, laminated film to your
                                        vehicle's windows,
                                        transitioning their appearance to a sleek, darker shade. This process serves
                                        multiple purposes: from protecting passengers from UV exposure to increasing
                                        privacy, reducing thermal intake, and minimizing sun glare. Enhanced focus on the
                                        road, not on the discomfort of bright sunlight, is a pivotal benefit. Beyond
                                        functionality, our window films also add a touch of personal style to your vehicle.
                                    </p>
                                </div>
                                <div class="col-xl-6">
                                    <h3>Protection Beyond the Surface</h3>
                                    <p class="text-white">Our high-grade, resilient tints double as a safety feature during
                                        accidents by
                                        reinforcing glass integrity, minimizing the risk of shattering. For those who store
                                        valuables in their car, the added privacy of tinted windows offers a layer of
                                        security from onlookers. Although applying window film might seem straightforward,
                                        it requires precision and expertise. An incorrect application can damage both film
                                        and glass, not to mention the aesthetics of your vehicle. The process, depending on
                                        complexity, can span from one to several hours, with costs reflecting the quality of
                                        the service.</p>
                                </div>
                                <div class="col-xl-6">
                                    <h3>Choose The Armour Lab</h3>
                                    <p class="text-white">for efficient, expert window tinting service that comes with our
                                        assurance of quality
                                        and competitive pricing. Connect with us for a service that transcends expectations.
                                    </p>
                                </div>
                            </div>

                            <!-- Call to Action Section -->
                            <div class="row">

                            </div>
                        </div>



                        <section class="section-area bg-white section-sp1">
                            <div class="container">
                                <div class="pricingtable-row my-5">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 mb-30">
                                            <div class="pricingtable-wrapper style1">
                                                <div class="pricingtable-inner">
                                                    <div class="pricingtable-main">
                                                        <div class="pricingtable-price">
                                                            <img class="img-fluid w-100"
                                                                src="{{ asset('images/BRONZE.png') }}" alt="">
                                                            <span>Starting From</span><br>
                                                            <div class="text-center">
                                                                <span class="priceing-doller">$</span>
                                                                <span class="pricingtable-bx">449</span>
                                                            </div>
                                                        </div>
                                                        <div class="pricingtable-title">
                                                            <h4 class="text-center">BRONZE</h4>
                                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                                        </div>
                                                    </div>
                                                    <ul class="pricingtable-features">
                                                        <li><i class="fa fa-check"></i> 18″ Hood & Fenders</li>
                                                        <li><i class="fa fa-check"></i> Side View Mirrors</li>
                                                        <li><i class="fa fa-check"></i> Headlights</li>
                                                        <!-- <li><i class="fa fa-check"></i> Trunk Stripe</li> -->
                                                    </ul>
                                                    <div class="pricingtable-footer">
                                                        <a href="{{ route('frontend.contact') }}"
                                                            class="btn btn-primary">Get It Now</a>
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
                                                            <img class="img-fluid w-100"
                                                                src="{{ asset('images/SILVER.png') }}" alt="">
                                                            <span>Starting From</span><br>
                                                            <div class="text-center">
                                                                <span class="priceing-doller">$</span>
                                                                <span class="pricingtable-bx">999</span>
                                                            </div>
                                                        </div>
                                                        <div class="pricingtable-title">
                                                            <h4 class="text-center">SILVER</h4>
                                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                                        </div>
                                                    </div>
                                                    <ul class="pricingtable-features">
                                                        <li><i class="fa fa-check"></i> 18″ Hood & Fenders</li>
                                                        <li><i class="fa fa-check"></i> Side View Mirrors</li>
                                                        <li><i class="fa fa-check"></i> Headlights and Fog lights</li>
                                                        <li><i class="fa fa-check"></i> Full Front Bumper</li>
                                                    </ul>
                                                    <div class="pricingtable-footer">
                                                        <a href="{{ route('frontend.contact') }}"
                                                            class="btn btn-primary">Get It Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 mb-30">
                                            <div class="pricingtable-wrapper style1 pricingtable-highlight">
                                                <div class="pricingtable-tag">
                                                    most used
                                                </div>
                                                <div class="pricingtable-inner">
                                                    <div class="pricingtable-main">
                                                        <div class="pricingtable-price">
                                                            <img class="img-fluid w-100"
                                                                src="{{ asset('images/GOLD.png') }}" alt="">
                                                            <span>Starting From</span><br>
                                                            <div class="text-center">
                                                                <span class="priceing-doller">$</span>
                                                                <span class="pricingtable-bx">1799</span>
                                                            </div>
                                                        </div>
                                                        <div class="pricingtable-title">
                                                            <h4 class="text-center">GOLD</h4>
                                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                                        </div>
                                                    </div>
                                                    <ul class="pricingtable-features">
                                                        <li><i class="fa fa-check"></i> Full Front Bumper</li>
                                                        <li><i class="fa fa-check"></i> Full Hood</li>
                                                        <li><i class="fa fa-check"></i> Full Fenders</li>
                                                        <li><i class="fa fa-check"></i> Side View Mirrors</li>
                                                        <li><i class="fa fa-check"></i> Headlights and Fog lights</li>
                                                        <li><i class="fa fa-check"></i> Trunk Stripe</li>
                                                        <li><i class="fa fa-check"></i> A-Pillars</li>
                                                    </ul>
                                                    <div class="pricingtable-footer">
                                                        <a href="{{ route('frontend.contact') }}"
                                                            class="btn btn-primary">Get It Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 mb-30">
                                            <div class="pricingtable-wrapper style1">
                                                <div class="pricingtable-inner">
                                                    <div class="pricingtable-main">
                                                        <div class="pricingtable-price">

                                                            <img class="img-fluid w-100"
                                                                src="{{ asset('images/PLATINUM.png') }}" alt="">
                                                            <span>Starting From</span><br>
                                                            <div class="text-center">
                                                                <span class="priceing-doller">$</span>
                                                                <span class="pricingtable-bx">4499</span>
                                                            </div>
                                                        </div>
                                                        <div class="pricingtable-title">
                                                            <h4 class="text-center">PLATINUM</h4>
                                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                                        </div>
                                                    </div>
                                                    <ul class="pricingtable-features">
                                                        <li><i class="fa fa-check"></i> Entire Front Bumper</li>
                                                        <li><i class="fa fa-check"></i> Entire Rear Bumper</li>
                                                        <li><i class="fa fa-check"></i> Full Hood</li>
                                                        <li><i class="fa fa-check"></i> Front of Roof </li>
                                                        <li><i class="fa fa-check"></i> Full Trunk Lid</li>
                                                        <li><i class="fa fa-check"></i> Entire Driver's Side (includes
                                                            doors, fenders, quarter panels)</li>
                                                        <li><i class="fa fa-check"></i> Entire Passenger's Side (includes
                                                            doors, fenders, quarter panels)</li>
                                                        <li><i class="fa fa-check"></i> Side View Mirrors</li>
                                                        <li><i class="fa fa-check"></i> Headlights and Fog lights</li>
                                                        <li><i class="fa fa-check"></i> Full A-Pillars</li>
                                                        <li><i class="fa fa-check"></i> Full Rocker Panels</li>
                                                        <li><i class="fa fa-check"></i> Rear Wheel Arches/Fenders</li>
                                                        <li><i class="fa fa-check"></i> Door Handles</li>
                                                        <li><i class="fa fa-check"></i> Door Edges</li>
                                                        <li><i class="fa fa-check"></i> Rear Spoiler/Wing (if applicable)
                                                        </li>
                                                        <li><i class="fa fa-check"></i> Full Rear Roof (if separate from
                                                            the front of the roof)</li>
                                                        {{-- <li><i class="fa fa-check"></i> Select</li> --}}
                                                    </ul>
                                                    <div class="pricingtable-footer">
                                                        <a href="{{ route('frontend.contact') }}"
                                                            class="btn btn-primary">Get It Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
        </section>



        <div id="content" class="shopping-layout-content">
            <div>
                <div class="tint-simulator-auto">
                    <div class="simulator-intro">
                        <div class="simulator-logo"></div>
                        <div id="tint_simulator_auto_intro" class="tint-simulator-auto-intro"
                            data-cms-area="tint_simulator_auto_intro_en_US" data-cms-area-filters="path">
                            <div>
                                <div data-view="CCT-View" data-cms-cct-instanceid="CMS_HTML-388"
                                    class="cms-content cms-content-CMS_HTML cms-content-selector-CMS_HTML-388">
                                    <div>
                                        <h1 class="simulator-title">Window Tints</h1>
                                        <p class="simulator-description">Select a vehicle type and color.
                                            Then see how the different tint percentages, or as we call it
                                            Variable Light Transfers (VLT’s), could look on the front,
                                            sides, and back of your vehicle.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="output">
                        <div id="base"
                            style="height: 370px; background-image: url(web-assets/simulators/images/car-black.jpg);">
                        </div>
                        <div class="product" id="front"></div>
                        <div class="product" id="sides"></div>
                        <div class="product" id="back"></div>
                        <div class="product" id="windshield"></div>
                    </div>
                    <div id="controls">
                        <div class="step" id="controlType">
                            <h3>Vehicle Type</h3><label>
                                <input type="radio" name="baseType" value="car" checked="">
                                Car</label><label>
                                <input type="radio" name="baseType" value="suv"> SUV</label><label>
                                <input type="radio" name="baseType" value="truck"> Truck</label>
                        </div>
                        <div class="step" id="controlTint">
                            <h3>Window Tints</h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="middle">Front</td>
                                        <td><input type="radio" class="tints" name="front" id="front70"
                                                value="70"><label for="front70" class="tintLabel">70</label></td>
                                        <td><input type="radio" class="tints" name="front" id="front50"
                                                value="50"><label for="front50" class="tintLabel">50</label></td>
                                        <td><input type="radio" class="tints" name="front" id="front35"
                                                value="35"><label for="front35" class="tintLabel">35</label></td>
                                        <td><input type="radio" class="tints" name="front" id="front20"
                                                value="20"><label for="front20" class="tintLabel">20</label></td>
                                        <td><input type="radio" class="tints" name="front" id="front05"
                                                value="05"><label for="front05" class="tintLabel">05</label></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle">Side</td>
                                        <td><input type="radio" class="tints" name="sides" id="sides70"
                                                value="70"><label for="sides70" class="tintLabel">70</label></td>
                                        <td><input type="radio" class="tints" name="sides" id="sides50"
                                                value="50"><label for="sides50" class="tintLabel">50</label></td>
                                        <td><input type="radio" class="tints" name="sides" id="sides35"
                                                value="35"><label for="sides35" class="tintLabel">35</label></td>
                                        <td><input type="radio" class="tints" name="sides" id="sides20"
                                                value="20"><label for="sides20" class="tintLabel">20</label></td>
                                        <td><input type="radio" class="tints" name="sides" id="sides05"
                                                value="05"><label for="sides05" class="tintLabel">05</label></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle">Back</td>
                                        <td><input type="radio" class="tints" name="back" id="back70"
                                                value="70"><label for="back70" class="tintLabel">70</label></td>
                                        <td><input type="radio" class="tints" name="back" id="back50"
                                                value="50"><label for="back50" class="tintLabel">50</label></td>
                                        <td><input type="radio" class="tints" name="back" id="back35"
                                                value="35"><label for="back35" class="tintLabel">35</label></td>
                                        <td><input type="radio" class="tints" name="back" id="back20"
                                                value="20"><label for="back20" class="tintLabel">20</label></td>
                                        <td><input type="radio" class="tints" name="back" id="back05"
                                                value="05"><label for="back05" class="tintLabel">05</label></td>
                                    </tr>
                                    <tr>
                                        <td valign="windshield">Windshield <sup>*</sup></td>
                                        <td><input type="radio" class="tints" name="windshield" id="windshield80"
                                                value="80"><label for="windshield80" class="tintLabel">70</label>
                                        </td>
                                        <td><input type="radio" class="tints" name="windshield" id="windshield70"
                                                value="70"><label for="windshield70" class="tintLabel">50</label>
                                        </td>
                                        <td><input type="radio" class="tints" name="windshield" id="windshield50"
                                                value="50"><label for="windshield50" class="tintLabel">35</label>
                                        </td>
                                        <td><input type="radio" class="tints" name="windshield" id="windshield50"
                                                value="50"><label for="windshield50" class="tintLabel">20</label>
                                        </td>
                                        <td><input type="radio" class="tints" name="windshield" id="windshield50"
                                                value="50"><label for="windshield50" class="tintLabel">05</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><sup>*</sup><small>Check local tint laws in your
                                                area</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="step" id="controlColors">
                            <h3>Vehicle Color</h3>
                            <div type="radio" class="colorRadio active" name="black" data-value="black"></div>
                            <div type="radio" class="colorRadio" name="white" data-value="white">
                            </div>
                            <div type="radio" class="colorRadio" name="red" data-value="red">
                            </div>
                            <div type="radio" class="colorRadio" name="blue" data-value="blue">
                            </div>
                            <div type="radio" class="colorRadio" name="gray" data-value="gray">
                            </div>
                            <div type="radio" class="colorRadio" name="silver" data-value="silver">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div style="max-width:750px; margin:auto;" class="container">
            <div class="my-5">
                <h2>Window Tints FAQs</h2>
                @include('frontend.partials.window-tints-faq', ['show' => true])
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
                        <h5 class="title mt-20">How Can We Help</h5>
                        <p>If you need any helps, please free to contact us.</p>
                        <form action="{{ route('frontend.contact.store') }}" id="addDriverForm"
                            class="contact-form style1" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="heading-bx mb-4 text-white">
                                                <h6 class="title-ext text-white">Contact Form</h6>
                                                <h3 class="title mb-0">DO YOU HAVE ANY<br /> QUESTIONS</h3>
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
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <div class="mb-10">
        <!-- Portfolio -->


        @php

            $cermaic_coating_images = [asset('images/wt/AdobeStock_212378764.jpeg'), asset('images/wt/AdobeStock_212378995.jpeg'), asset('images/wt/AdobeStock_254695811.jpeg'), asset('images/wt/AdobeStock_314911406.jpeg')];

        @endphp

        <section class="section-area">
            <div class="portfolio-carousel owl-none owl-carousel magnific-image">
                @foreach ($cermaic_coating_images as $image)
                    <div class="item">
                        <div class="portfolio-box style-1">
                            <div class="media">
                                <img style="height: 300px; object-fit: cover;" lazyloading="true"
                                    src="{{ $image }}" alt="">
                                <div class="portfolio-overlay">
                                    <ul>
                                        {{-- <li><a href="#" class="ttr-icon"><i class="la la-link"></i></a> --}}
                                        </li>
                                        <li><a href="{{ $image }}" class="magnific-anchor ttr-icon"><i
                                                    class="la la-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h5 class="title">
                                    <a href="#">
                                        <i class="flaticon-fuel-1"></i> Window Tints
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </div>

    </section>
    </div>
@endsection

@section('scripts')
    <script>
        var SC = window.SC = {
            ENVIRONMENT: {
                jsEnvironment: typeof nsglobal === 'undefined' ? 'browser' : 'server'
            },
            isCrossOrigin: function() {
                return 'www.xpel.com' !== document.location.hostname
            },
            isPageGenerator: function() {
                return typeof nsglobal !== 'undefined'
            },
            getSessionInfo: function(key) {
                var session = SC.SESSION || SC.DEFAULT_SESSION || {};
                return key ? session[key] : session
            },
            getPublishedObject: function(key) {
                return SC.ENVIRONMENT && SC.ENVIRONMENT.published && SC.ENVIRONMENT.published[key] ? SC.ENVIRONMENT
                    .published[key] : null
            },
            Translations: {}
        };
        if (!history.pushState && SC.ENVIRONMENT.jsEnvironment === 'browser' && (location.pathname !== '/' || location
                .search !== '') && location.hash === '') {
            if (location.pathname === 'index.html') {
                var hash = (RegExp('fragment=' + '(.+?)(&|$)').exec(location.search) || [, ''])[1];
                location.replace(location.pathname + location.search + '/#' + unescape(hash))
            } else {
                location.replace('/#' + location.pathname + location.search)
            }
            document.write('')
        }
        if (SC.isPageGenerator()) {
            var metas = document.head.getElementsByTagName('meta');
            for (var i = 0; i < metas.length; i++) {
                if (metas[i].getAttribute('content') === 'nofollow,noindex') {
                    document.head.removeChild(metas[i])
                }
            }
        }
        if (!SC.isCrossOrigin()) {
            document.getElementById('main').innerHTML = '';
            if (SC.isPageGenerator()) {
                document.body.className = document.body.className + ' seo-support'
            }
            SC.ENVIRONMENT.seoSupport = !!~document.body.className.indexOf('seo-support');
            if (SC.isPageGenerator()) {
                SC.ENVIRONMENT.PROFILE = {}
            }
            if (SC.ENVIRONMENT.jsEnvironment === 'browser' && !SC.isCrossOrigin()) {
                var datetime = new Date().getTime();
                var reference_tag = document.getElementsByTagName('script')[0];
                var new_script_tag = document.createElement('script');
                new_script_tag.src = '' + datetime + '';
                new_script_tag.type = 'text/javascript';
                new_script_tag.async = false;
                reference_tag.parentNode.insertBefore(new_script_tag, reference_tag)
            }
        }


        $(document).ready(function() {
            // Get references to the relevant elements
            var base = $("#base");
            var radioButtons = $("[name='baseType']");
            var colorRadios = $(".colorRadio");
            var tintRadios = $(".tints");
            var productFront = $("#front");
            var productSides = $("#sides");
            var productBack = $("#back");
            var productWindshield = $("#windshield");

            // Initialize the default color, vehicle type, and tint
            var currentColor = "black";
            var currentType = "car";
            var currentTint = ""; // Default tint value
            var currentFrontPosition = "front";
            var currentSidesPosition = "sides";
            var currentBackPosition = "back";
            var currentWindshieldPosition = "windshield";

            // Event listener for tint radios
            $(".tints").on("click", function() {
                var position = $(this).attr("name");
                var value = $(this).attr("value");
                updateProductPosition(position, value);
            });

            // Function to update the product position
            function updateProductPosition(position, value) {
                if (position === "front") {
                    updateProductImages("front", value);
                } else if (position === "sides") {
                    updateProductImages("sides", value);
                } else if (position === "back") {
                    updateProductImages("back", value);
                } else if (position === "windshield") {
                    updateProductImages("windshield", value);
                }

            }
            // function updateProductPosition(position) {
            //     if (position === "front") {
            //         currentFrontPositionChange = "front";
            //     } else if (position === "sides") {
            //         currentSidesPositionChange = "sides";
            //     } else if (position === "back") {
            //         currentBackPositionChange = "back";
            //     } else if (position === "windshield") {
            //         currentWindshieldPositionChange = "windshield";
            //     }
            //     updateProductImages();
            // }

            // Event listener for product position radio buttons
            var productPositionRadios = $("[name='productPosition']");
            productPositionRadios.on("change", function() {
                var selectedPosition = $(this).val();
                updateProductPosition(selectedPosition);
            });

            // Initialize the base image and product images
            updateBaseImage();

            // Function to update the base image
            function updateBaseImage() {
                var selectedType = radioButtons.filter(":checked").val();
                currentType = selectedType;
                base.css("background-image", "url(web-assets/simulators/images/" + currentType + "-" +
                    currentColor + ".jpg)");
            }

            // Function to update the product images based on the selected vehicle type, tint, and position
            function updateProductImages(currentPositionChange, currentTint) {
                var selectedType = currentType.toLowerCase();
                var productImageFrontURL = "web-assets/simulators/images/tints/" + selectedType + "-" +
                    currentFrontPosition + "-" + currentTint + ".png";
                var productImageSidesURL = "web-assets/simulators/images/tints/" + selectedType + "-" +
                    currentSidesPosition + "-" + currentTint + ".png";
                var productImageBackURL = "web-assets/simulators/images/tints/" + selectedType + "-" +
                    currentBackPosition + "-" + currentTint + ".png";
                var productImageWindshieldURL = "web-assets/simulators/images/tints/" + selectedType + "-" +
                    currentWindshieldPosition + "-" + currentTint + ".png";

                if (currentPositionChange === "front") {
                    productFront.css("background-image", "url(" + productImageFrontURL + ")");
                }
                if (currentPositionChange === "sides") {
                    productSides.css("background-image", "url(" + productImageSidesURL + ")");
                }
                if (currentPositionChange === "back") {
                    productBack.css("background-image", "url(" + productImageBackURL + ")");
                }
                if (currentPositionChange === "windshield") {
                    productWindshield.css("background-image", "url(" + productImageWindshieldURL + ")");
                }
            }
            // function updateProductImages() {
            //     var selectedType = currentType.toLowerCase();
            //     var productImageFrontURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentFrontPosition + "-" + currentTint + ".png";
            //     var productImageSidesURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentSidesPosition + "-" + currentTint + ".png";
            //     var productImageBackURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentBackPosition + "-" + currentTint + ".png";
            //     var productImageWindshieldURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentWindshieldPosition + "-" + currentTint + ".png";

            //     if (currentFrontPositionChange === "front") {
            //         productFront.css("background-image", "url(" + productImageFrontURL + ")");
            //     }
            //     if (currentSidesPositionChange === "sides") {
            //         productSides.css("background-image", "url(" + productImageSidesURL + ")");
            //     }
            //     if (currentBackPositionChange === "back") {
            //         productBack.css("background-image", "url(" + productImageBackURL + ")");
            //     }
            //     if (currentWindshieldPositionChange === "windshield") {
            //         productWindshield.css("background-image", "url(" + productImageWindshieldURL + ")");
            //     }
            // }

            // Event listener for radio buttons
            radioButtons.on("change", function() {
                updateBaseImage();
                updateProductImages();
            });

            // Event listener for color radios
            colorRadios.on("click", function() {
                currentColor = $(this).data("value");
                updateBaseImage();
                updateProductImages();
            });

            // Event listener for tint radios
            tintRadios.on("change", function() {
                currentTint = $(this).val();
                updateProductImages();
            });
        });


        // document.addEventListener("DOMContentLoaded", function() {
        //     // Get references to the relevant elements
        //     const base = document.getElementById("base");
        //     const radioButtons = document.getElementsByName("baseType");
        //     const colorRadios = document.querySelectorAll(".colorRadio");
        //     const tintRadios = document.querySelectorAll(".tints");
        //     const productFront = document.getElementById("front");
        //     const productSides = document.getElementById("sides");
        //     const productBack = document.getElementById("back");
        //     const productWindshield = document.getElementById("windshield");

        //     // Initialize the default color, vehicle type, and tint
        //     let currentColor = "black";
        //     let currentType = "car";
        //     let currentTint = ""; // Default tint value
        //     let currentFrontPosition = "front";
        //     let currentSidesPosition = "sides";
        //     let currentBackPosition = "back";
        //     let currentWindshieldPosition = "windshield";

        //     // Function to update the product position
        //     function updateProductPosition(position) {
        //         if (position === "front") {
        //             currentFrontPosition = "front";
        //         } else if (position === "sides") {
        //             currentSidesPosition = "sides";
        //         } else if (position === "back") {
        //             currentBackPosition = "back";
        //         } else if (position === "windshield") {
        //             currentWindshieldPosition = "windshield";
        //         }

        //         updateProductImages();
        //     }

        //     // Event listener for product position radio buttons
        //     const productPositionRadios = document.querySelectorAll("input[name='productPosition']");
        //     productPositionRadios.forEach(function(radio) {
        //         radio.addEventListener("change", function() {
        //             const selectedPosition = radio.value;
        //             updateProductPosition(selectedPosition);
        //         });
        //     });

        //     // Initialize the base image and product images
        //     updateBaseImage();
        //     updateProductImages();

        //     // Function to update the base image
        //     function updateBaseImage() {
        //         const selectedType = Array.from(radioButtons).find((radio) => radio.checked).value;
        //         currentType = selectedType;
        //         base.style.backgroundImage = `url(web-assets/simulators/images/${currentType}-${currentColor}.jpg)`;
        //     }

        //     // Function to update the product images based on the selected vehicle type, tint, and position
        //     function updateProductImages() {
        //         const selectedType = currentType.toLowerCase();
        //         const productImageFrontURL = `web-assets/simulators/images/tints/${selectedType}-${currentFrontPosition}-${currentTint}.png`;
        //         const productImageSidesURL = `web-assets/simulators/images/tints/${selectedType}-${currentSidesPosition}-${currentTint}.png`;
        //         const productImageBackURL = `web-assets/simulators/images/tints/${selectedType}-${currentBackPosition}-${currentTint}.png`;
        //         const productImageWindshieldURL = `web-assets/simulators/images/tints/${selectedType}-${currentWindshieldPosition}-${currentTint}.png`;
        //         console.log(currentFrontPosition);
        //         if (currentFrontPosition === "front") {
        //             productFront.style.backgroundImage = `url(${productImageFrontURL})`;
        //         }
        //         if (currentSidesPosition === "sides") {
        //             productSides.style.backgroundImage = `url(${productImageSidesURL})`;
        //         }
        //         if (currentBackPosition === "back") {
        //             productBack.style.backgroundImage = `url(${productImageBackURL})`;
        //         }
        //         if (currentWindshieldPosition === "windshield") {
        //             productWindshield.style.backgroundImage = `url(${productImageWindshieldURL})`;
        //         }
        //     }

        //     // Event listener for radio buttons
        //     radioButtons.forEach(function(radioButton) {
        //         radioButton.addEventListener("change", function() {
        //             updateBaseImage();
        //             updateProductImages();
        //         });
        //     });

        //     // Event listener for color radios
        //     colorRadios.forEach(function(colorRadio) {
        //         colorRadio.addEventListener("click", function() {
        //             currentColor = colorRadio.getAttribute("data-value");
        //             updateBaseImage();
        //             updateProductImages();
        //         });
        //     });

        //     // Event listener for tint radios
        //     tintRadios.forEach(function(tintRadio) {
        //         tintRadio.addEventListener("change", function() {
        //             currentTint = tintRadio.value;
        //             updateProductImages();
        //         });
        //     });
        // });
    </script>


    <script
        src="secure/shopping.environment674b.ssp?lang=en_US&amp;cur=null&amp;X-SC-Touchpoint=shopping&amp;t=1696719147777">
    </script>

    <script src="secure/shopping-templatesfef6.js?t=1696719147777"></script>

    <script src="secure/javascript/shoppingfef6.js?t=1696719147777"></script>

    <script type="text/javascript" src="api/cms/v2/sites/cms-templates"></script>
@endsection
