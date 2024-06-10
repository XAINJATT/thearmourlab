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
            height: 500px;
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
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class=" row my-1 ">
                                        <h2 class="col-md-6">Signature Features</h2>
                                        <div class="col-md-6">
                                            <div class="d-flex gap-3 mt-4 pt-3 align-items-center">
                                                <img class="img-fluid text-right" height="200"
                                                    style="height:150px !important"
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
                                            <h4 class=""> <i class="fas fa-atom text-warning"></i> &nbsp;&nbsp;&nbsp;
                                                Ceramic
                                                Particle Technology</h4>
                                            <p>Contains a proprietary blend of ceramic particles to act as a solid barrier
                                                to heat
                                                while maintaining the ease of install in a 1.5 mil construction.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4> <i class="fas fa-sun text-warning"></i> &nbsp;&nbsp;&nbsp; UV Ray
                                                Protection</h4>
                                            <p>Nano-Ceramic Film like PRIME XR PLUS provides SPF 1,000 protection that
                                                effectively
                                                blocks over 99% of harmful UV rays that can lead to numerous skin cancers,
                                                premature
                                                aging and skin cell damage.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4><i class="fas fa-eye text-warning"></i> &nbsp;&nbsp;&nbsp; Greater Clarity
                                            </h4>
                                            <p>In the past, keeping cool meant choosing a darker shade of tint. The
                                                multilayer
                                                nano-ceramic construction provides ultra-high performance without reducing
                                                outbound
                                                visibility.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4><i class="fas fa-wifi text-warning"></i>&nbsp;&nbsp;&nbsp; Crystal Clear
                                                Signal</h4>
                                            <p>In a digital world, clear communication is key. Ceramic Window Tint
                                                construction will
                                                not interfere with radio, cellular, or bluetooth signals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="ttr-media mb-30">
                                        <video autoplay style="height:70vh" loop muted class="mb-10" width="100%"
                                            src="{{ asset('videos/wt/IMG_9154.mp4') }}"></video>
                                    </div>
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

                                <h2 class="text-center fs-2">Window Tints Packages</h2>
                                <div class="pricingtable-row my-5">
                                    <div class="row">
                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-5 col-sm-6 mb-30">
                                            <div class="pricingtable-wrapper style1 pricingtable-highlight">
                                                <div class="pricingtable-tag">
                                                    most used
                                                </div>
                                                <div class="pricingtable-inner">
                                                    <div class="pricingtable-main">
                                                        <div class="pricingtable-price">
                                                            {{-- <img class="img-fluid w-100" --}}
                                                            {{-- src="{{ asset('images/GOLD.png') }}" alt=""> --}}
                                                            {{-- <span>Starting From</span><br>
                                                            <div class="text-center">
                                                                <span class="priceing-doller">$</span>
                                                                <span class="pricingtable-bx">1799</span>
                                                            </div> --}}
                                                        </div>
                                                        <div class="pricingtable-title">
                                                            <h4 class="text-center">Ceramic</h4>
                                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                                        </div>
                                                    </div>
                                                    <ul class="pricingtable-features fs-4">
                                                        <li><i class="fa fa-check"></i> Comprehensive Lifetime Warranty
                                                            (Parts & Labour).</li>
                                                        <li><i class="fa fa-check"></i> Advanced Nano-Hybrid Technology.
                                                        </li>
                                                        <li><i class="fa fa-check"></i> Exceptional Heat Rejection for
                                                            Comfort.</li>
                                                        <li><i class="fa fa-check"></i> Improves Visibility for Safer
                                                            Driving.</li>
                                                        <li><i class="fa fa-check"></i> Blocks up to 99% of harmful UV
                                                            rays.
                                                        </li>
                                                        <li><i class="fa fa-check"></i> Infrared Heat Rejection up to 88%.
                                                        </li>
                                                        <li><i class="fa fa-check"></i> Maintains Signal Clarity for Radio,
                                                            Cellular, and Bluetooth Devices</li>
                                                    </ul>

                                                    <div class="">
                                                        {{-- <span class="px-4">Ceramic</span> --}}
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>Warranty</strong>
                                                            <span class="text-warning fw-bold">Life Time</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>UV Rejection</strong>
                                                            <span>99%</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex text-white px-4 bg-danger p-3 align-items-center my-2 justify-content-between">
                                                            <strong>IR HEAT Rejection</strong>
                                                            <span>78% - 88%</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>2 Front Windows</strong>
                                                            <span>$199.99</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>COUPE/SEDAN/CROSSOVER</strong>
                                                            <span>$349</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>SUV/MINIVAN</strong>
                                                            <span>$379</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>FULL WINDSHIELD</strong>
                                                            <span>$220+</span>
                                                        </span>
                                                        <hr>
                                                    </div>

                                                    <div class="pricingtable-footer">
                                                        <a href="{{ route('frontend.contact') }}"
                                                            class="btn btn-primary">Get It Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-sm-6 mb-30">
                                            <div class="pricingtable-wrapper style1">
                                                <div class="pricingtable-inner">
                                                    <div class="pricingtable-main">
                                                        <div class="pricingtable-price">

                                                            {{-- <img class="img-fluid w-100"
                                                                src="{{ asset('images/PLATINUM.png') }}" alt=""> --}}
                                                            {{-- <span>Starting From</span><br>
                                                            <div class="text-center">
                                                                <span class="priceing-doller">$</span>
                                                                <span class="pricingtable-bx">4499</span>
                                                            </div> --}}
                                                        </div>
                                                        <div class="pricingtable-title">
                                                            <h4 class="text-center">Nano Ceramic</h4>
                                                            <!-- <p><i class="la la-clock"></i> </p> -->
                                                        </div>
                                                    </div>
                                                    <ul class="pricingtable-features">
                                                        <li><i class="fa fa-check"></i> Inclusive Lifetime Warranty (Parts
                                                            &
                                                            Labour).</li>
                                                        <li><i class="fa fa-check"></i> State-of-the-Art Nano-Ceramic
                                                            Particle Technology.</li>
                                                        <li><i class="fa fa-check"></i> Superior Heat Rejection Maximizing
                                                            Comfort.</li>
                                                        <li><i class="fa fa-check"></i> Enhanced Performance for Optimal
                                                            Results. </li>
                                                        <li><i class="fa fa-check"></i> Over 99% Effective at Blocking
                                                            Harmful UV Rays.</li>
                                                        <li><i class="fa fa-check"></i> Infrared Heat Rejection up to 98%.
                                                        </li>
                                                        <li><i class="fa fa-check"></i> Designed to Preserve Signal
                                                            Integrity for All Devices.</li>

                                                        {{-- <li><i class="fa fa-check"></i> Select</li> --}}
                                                    </ul>
                                                    <hr>

                                                    <div>
                                                        {{-- <span class="px-4">Nano Ceramic</span> --}}
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>Warranty</strong>
                                                            <span class="text-warning fw-bold">Life Time</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>UV Rejection</strong>
                                                            <span>99%</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex text-white px-4 bg-danger p-3 align-items-center my-2 justify-content-between">
                                                            <strong>IR HEAT Rejection</strong>
                                                            <span>92% - 98%</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>2 Front Windows</strong>
                                                            <span>$229</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>COUPE/SEDAN/CROSSOVER</strong>
                                                            <span>$550</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>SUV/MINIVAN</strong>
                                                            <span>$600</span>
                                                        </span>
                                                        <hr>
                                                        <span
                                                            class="d-flex px-4 align-items-center my-2 justify-content-between">
                                                            <strong>FULL WINDSHIELD</strong>
                                                            <span>$300+</span>
                                                        </span>
                                                        <hr>
                                                    </div>

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
                        <div id="base" style="background-image: url(web-assets/simulators/images/car-black.jpg);">
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
                                                value="70"><label for="windshield80" class="tintLabel">70</label>
                                        </td>
                                        <td><input type="radio" class="tints" name="windshield" id="windshield70"
                                                value="50"><label for="windshield70" class="tintLabel">50</label>
                                        </td>
                                        <td><input type="radio" class="tints" name="windshield" id="windshield50"
                                                value="35"><label for="windshield50" class="tintLabel">35</label>
                                        </td>
                                        <td><input type="radio" class="tints" name="windshield" id="windshield20"
                                                value="20"><label for="windshield20" class="tintLabel">20</label>
                                        </td>
                                        <td><input type="radio" class="tints" name="windshield" id="windshield05"
                                                value="05"><label for="windshield05" class="tintLabel">05</label>
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
                            <path
                                d="M400.85,181v-18.3c0-43.8-15.5-84.5-43.6-114.7c-28.8-31-68.4-48-111.6-48h-15.1c-43.2,0-82.8,17-111.6,48 c-28.1,30.2-43.6,70.9-43.6,114.7V181c-34.1,2.3-61.2,30.7-61.2,65.4V275c0,36.1,29.4,65.5,65.5,65.5h36.9c6.6,0,12-5.4,12-12
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
                        </form> --}}
                        <script type="text/javascript" src="https://form.jotform.com/jsform/241586322618055"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <div class="mb-10">
        <!-- Portfolio -->


        {{-- @php

            $cermaic_coating_images = [asset('images/wt/AdobeStock_212378764.jpeg'), asset('images/wt/AdobeStock_212378995.jpeg'), asset('images/wt/AdobeStock_254695811.jpeg'), asset('images/wt/AdobeStock_314911406.jpeg')];

        @endphp --}}

        <section class="section-area">
            <div class="portfolio-carousel owl-none owl-carousel magnific-image">
                @foreach (get_wt_media() as $image)
                    <div class="item">
                        <div class="portfolio-box style-1">
                            <div class="media">
                                <img style="height: 300px; object-fit: cover;" lazyloading="true"
                                    src="{{ Storage::url($image->path) }}" alt="">
                                <div class="portfolio-overlay">
                                    <ul>
                                        {{-- <li><a href="#" class="ttr-icon"><i class="la la-link"></i></a> --}}
                                        </li>
                                        <li><a href="{{ Storage::url($image->path) }}" class="magnific-anchor ttr-icon"><i
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
        $(document).ready(function() {
            // References to DOM elements
            var base = $("#base");
            var radioButtons = $("[name='baseType']");
            var colorRadios = $(".colorRadio");
            var tintRadios = $(".tints");
            var productFront = $("#front");
            var productSides = $("#sides");
            var productBack = $("#back");
            var productWindshield = $("#windshield");

            // Default values
            var currentColor = "black";
            var currentTint = "";

            function updateBaseImage() {
                var selectedType = radioButtons.filter(":checked").val();
                base.css("background-image", "url(web-assets/simulators/images/" + selectedType + "-" +
                    currentColor + ".jpg?v=1)");
            }

            function updateProductImages() {
                var selectedType = radioButtons.filter(":checked").val().toLowerCase();

                tintRadios.each(function() {
                    var position = $(this).attr("name");
                    var isActive = $(this).is(":checked");
                    var tintValue = $(this).val();

                    if (isActive) {
                        var imageURL = "web-assets/simulators/images/tints/" + selectedType + "-" +
                            position + "-" + tintValue + ".png?v=1";
                        $("#" + position).css("background-image", "url(" + imageURL + ")");
                    }
                });
            }

            radioButtons.change(function() {
                updateBaseImage();
                updateProductImages(); // Update active parts of the product
            });

            colorRadios.click(function() {
                colorRadios.removeClass("active");
                $(this).addClass("active");
                currentColor = $(this).data("value");
                updateBaseImage();
                updateProductImages(); // Update active parts of the product
            });

            tintRadios.change(function() {
                currentTint = $(this).val();
                updateProductImages(); // Update active parts of the product
            });
        });
    </script>
@endsection
