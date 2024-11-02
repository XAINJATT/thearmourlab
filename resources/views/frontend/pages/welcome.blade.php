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
    <link rel="stylesheet"
        href="https://iconrocklear.com/wp-content/plugins/bdthemes-element-pack/assets/css/ep-image-compare.css?ver=7.1.0">
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
                                <h2 class="title" data-swiper-parallax="-400">Your Trusted Experts in Advanced Vehicle
                                    Protection Solutions</h2>
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

        <style>
            /*
    |--------------------------------------------------------------------------
    | Section 7
    |--------------------------------------------------------------------------
    */

            .section-7-bg {
                background-color: #262626;
                background-image: url(https://iconrocklear.com/wp-content/uploads/2023/08/top3.jpg);
                background-position: top center;
                background-repeat: no-repeat;
                background-size: cover;
                margin-top: 100px;
                height: 100px;
            }

            .section-7 {
                background: url(../images/Group-29-1.png) no-repeat;
                background-position: bottom center;
                background-repeat: no-repeat;
                background-size: cover;
                transition: background 0.3s, border 0.3s, border-radius 0.3s,
                    box-shadow 0.3s;
                padding: 100px 0px 300px 0px;
            }

            .section-7 .flex {
                gap: 30px;
                align-items: stretch;
            }

            .section-7 .column {
                height: 100%;
                min-height: 1420px;
            }

            .section-7 .header-title-small,
            .section-7 .header-title {
                color: #fff;
            }

            .section-7 .section-header {
                color: #fff !important;
                text-align: center;
                width: 100%;
            }

            .section-7 .section-header h3 {
                color: #efefef;
                font-family: "Montserrat", Sans-serif;
                font-size: 26px;
                font-weight: 800;
                text-transform: uppercase;
            }

            .section-7 .section-header h3 span {
                color: #222222 !important;
                text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff,
                    1px 1px 0 #fff;
            }

            .section-7 .section-icon {
                margin: 13px 0px 20px 0px;
                padding: 12px 12px 6px 12px;
                border-style: solid;
                border-width: 1px 1px 1px 1px;
                border-color: var(--e-global-color-text);
                color: var(--e-global-color-text) !important;
                border-radius: 50% 50% 50% 50%;
                transition: background 0.3s, border 0.3s, border-radius 0.3s,
                    box-shadow 0.3s, transform var(--e-transform-transition-duration, 0.4s);
                display: inline-block;
            }

            .progress-bar-container {
                background-color: #222221;
                background-image: url(../images/Rectangle-10-copy.png);
                background-position: top center;
                background-repeat: no-repeat;
                background-size: contain;
                justify-content: start;
                border-style: solid;
                border-width: 1px 1px 1px 1px;
                border-color: #54595f7a;
                transition: background 0.3s, border 0.3s, border-radius 0.3s,
                    box-shadow 0.3s;
                margin: 8px 8px 8px 8px;
                padding: 30px 15px 0px 15px;
                display: flex;
                position: relative;
                width: 100%;
                flex-wrap: wrap;
                align-content: flex-start;
                flex-direction: column;
                min-height: 1450px;
            }

            .progress-bar-item {
                margin-bottom: 5px;
                position: relative;
                margin-bottom: 1rem;
                color: #000;
                text-transform: capitalize;
                font-size: 14px;
                font-weight: 600;
                line-height: 2.5em;
                width: 100%;
                color: var(--e-global-color-text);
            }

            .progress-bar-label {
                margin-bottom: 5px;
                font-weight: bold;
                display: flex;
                justify-content: space-between;
                align-items: center;
                /* color: #333; */
            }

            .progress-bar {
                background-color: #e0e0e0;
                height: 10px;
                /* border-radiuxs: 5px; */
                overflow: hidden;
                /* line-height: 2.5em; */
            }

            .progress-bar-fill {
                display: block;
                height: 100%;
                width: 0;
                background: linear-gradient(90deg, #0d9344, #cfb728) !important;
                transition: width 0.8s ease-out;
                height: 100%;
                font-size: 12px;
                line-height: 20px;
                color: #fff;
                text-align: center;
                box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
            }

            .custom-list {
                list-style: none;
                padding-left: 0;
            }

            .custom-list li {
                position: relative;
                padding-left: 25px;
                margin-bottom: 10px;
                color: #fff;
            }

            .custom-list li:before {
                content: "✔";
                position: absolute;
                left: 0;
                top: 0px;
                color: #cfb728;
                font-weight: 800;
            }

            .custom-list li:before:not(.custom-list li:nth-child(2)) {
                top: 5px;
            }

            .progress-image {
                position: absolute;
                text-align: center;
                left: 0;
                bottom: -190px;
                width: 100%;
                z-index: 1;
            }

            .progress-image img {
                max-width: 73%;
                vertical-align: middle;
                display: inline-block;
                height: auto;
                border: none;
                border-radius: 0;
                box-shadow: none;
            }

            .flex {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
            }

            .column {
                flex: 1;
                min-width: 250px;
            }

            /*
|--------------------------------------------------------------------------
| Section 9 
|--------------------------------------------------------------------------
*/

.section-9 {
    background-image: url(../images/Group-26-2.png);
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    transition: background 0.3s, border 0.3s, border-radius 0.3s,
        box-shadow 0.3s;
    padding: 30px 0px 30px 0px;
    margin-top: 100px;
}

.section-10 .header-title {
    font-size: 76px;
}
.section-10 > * {
    line-height: 2;
}
.section-10 h6,
.section-10 h5 {
    font-weight: 800 !important;
}
.section-10 .card {
    height: 100%;
}

            .image-compare {
                position: relative;
                width: 100%;
                /* Adjust based on your needs */
                max-width: 1500px;
                /* Adjust based on your images */
                margin: auto;
                /* Center the component */
            }

            .image-compare {
                touch-action: auto;
                /* Or try removing this property altogether */
            }

            .img-comp-container img {
                all: unset !important;
            }

            .img-comp-container {
                position: relative;
                width: 100%;
                max-width: 600px;
                /* Adjust to suit your needs, or make it responsive */
                user-select: none;
            }

            .img-comp-img,
            .img-comp-overlay img {
                display: block;
                width: 100%;
                height: auto;
                user-select: none;
            }

            .img-comp-slider {
                position: absolute;
                z-index: 9;
                cursor: ew-resize;
                /* Fallback for desktop devices */
                width: 30px;
                /* Larger touch area for mobile devices */
                height: 30px;
                background-color: #2196F3;
                border: 2px solid #fff;
                border-radius: 50%;
                top: 50%;
                transform: translateY(-50%);
                box-shadow: 0 0 5px #666;
            }

            .img-comp-overlay {
                position: absolute;
                top: 0;
                width: 100%;
                /* Initially covering the full image */
                height: 100%;
                overflow: hidden;
                border-right: 2px solid #2196F3;
                /* Visible divider line */
            }

            @media screen and (max-width: 768px) {
                .elementor-widget-bdt-image-compare {
                    display: none;
                }

                .img-comp-container {

                    display: block;
                }
            }

            @media screen and (min-width: 769px) {
                .img-comp-container {
                    margin-left: -200px;
                    display: none;
                }

                .elementor-widget-bdt-image-compare {
                    display: block;
                }
            }
        </style>

        <!--
                                                                                              |--------------------------------------------------------------------------
                                                                                              | Section 7
                                                                                              |--------------------------------------------------------------------------
                                                                                              -->
        <div class="section-7-bg"></div>

        <section class="section-7">
            <div class="section-container container">
                <div>
                    <h4 class="header-title-small">
                        HOW DOES ICON ROCKLEAR COMPARE TO ALL OTHER COATINGS?
                    </h4>
                    <hr class="hr-light" />
                    <h2 class="header-title">EFFICIENCY</h2>
                </div>
                <div class="flex">
                    <div class="column">
                        <div class="progress-bar-container">
                            <div class="section-header">
                                <h3>ICON <span>ROCKLEAR</span></h3>
                                <span class="section-icon"><i aria-hidden="true" class="fas fa-chevron-down"></i></span>
                            </div>
                            <div id="rocklear-progress-bar">
                                <!--
                                                                                                                                                                                          |--------------------------------------------------------------------------
                                                                                                                                                                                          | Data coming from javascript  //script.js
                                                                                                                                                                                          |--------------------------------------------------------------------------
                                                                                                                                                                                          -->
                            </div>
                            <ul class="custom-list">
                                <li>
                                    Does not require clear coat reduction, only provides depth
                                </li>
                                <li>Zero Maintenance Costs</li>
                                <li>
                                    Renewable system for life, repairable defects while still
                                    maintaining a thick layer
                                </li>
                            </ul>
                            <div class="progress-image">
                                <img loading="lazy" decoding="async" width="394" height="394"
                                    src="images/Vector-Smart-Object.png" class="attachment-large size-large wp-image-433"
                                    alt=""
                                    srcset="
                                                                                                        images/Vector-Smart-Object.png         394w,
                                                                                                        images/Vector-Smart-Object-300x300.png 300w,
                                                                                                        images/Vector-Smart-Object-150x150.png 150w
                                                                                                      "
                                    sizes="(max-width: 394px) 100vw, 394px" />
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="progress-bar-container">
                            <div class="section-header">
                                <h3>CERAMICS <span>/ GRAPHENE</span></h3>
                                <span class="section-icon"><i aria-hidden="true" class="fas fa-chevron-down"></i></span>
                            </div>
                            <div id="ceramic-progress-bar">
                                <!--
                                                                                                                                                                                          |--------------------------------------------------------------------------
                                                                                                                                                                                          | Data coming from javascript  //script.js
                                                                                                                                                                                          |--------------------------------------------------------------------------
                                                                                                                                                                                          -->
                            </div>
                            <ul class="custom-list">
                                <li>
                                    Requires Clear Coat reduction, lessening its Life &
                                    Protection
                                </li>
                                <li>
                                    Requires weekly maintenance, toppers, & yearly recoat costs
                                </li>
                                <li>
                                    Easily damaged, requires full removal, correction, and
                                    reinstallation costs
                                </li>
                            </ul>
                            <div class="progress-image">
                                <img loading="lazy" decoding="async" width="406" height="410"
                                    src="images/Vector-Smart-Object-1.png"
                                    class="attachment-large size-large wp-image-449" alt=""
                                    srcset="
                                                                                                        images/Vector-Smart-Object-1.png         406w,
                                                                                                        images/Vector-Smart-Object-1-297x300.png 297w,
                                                                                                        images/Vector-Smart-Object-1-150x150.png 150w
                                                                                                      "
                                    sizes="(max-width: 406px) 100vw, 406px" />
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="progress-bar-container">
                            <div class="section-header">
                                <h3>POLYMERS <span>/ WAX</span></h3>
                                <span class="section-icon"><i aria-hidden="true" class="fas fa-chevron-down"></i></span>
                            </div>
                            <div id="polymers-progress-bar">
                                <!--
                                                                                                                                                                                          |--------------------------------------------------------------------------
                                                                                                                                                                                          | Data coming from javascript  //script.js
                                                                                                                                                                                          |--------------------------------------------------------------------------
                                                                                                                                                                                          -->
                            </div>

                            <ul class="custom-list">
                                <li>Temporary</li>
                            </ul>
                            <div class="progress-image">
                                <img loading="lazy" decoding="async" width="409" height="409"
                                    src="images/Vector-Smart-Object-2.png"
                                    class="attachment-large size-large wp-image-450" alt=""
                                    srcset="images/Vector-Smart-Object-2.png 409w, images/Vector-Smart-Object-2-300x300.png 300w, images/Vector-Smart-Object-2-150x150.png 150w"
                                    sizes="(max-width: 409px) 100vw, 409px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
                                                                                              |--------------------------------------------------------------------------
                                                                                              | Section 9
                                                                                              |--------------------------------------------------------------------------
                                                                                              -->

        <section class="section-9 mb-5">
            <div class="section-container text-center mt-5 pt-3">
                <h4 class="header-title-small text-white">CORRECTION | PROTECTION</h4>
                <hr class="hr-light" />
                <h2 class="header-title text-white">ICON ROCKLEAR</h2>


                {{-- <div class="img-comp-container">
                    <div class="img-comp-img">
                        <img src="https://via.placeholder.com/600x400.png?text=Before" alt="Before">
                    </div>
                    <div class="img-comp-overlay">
                        <img src="https://via.placeholder.com/600x400.png?text=After" alt="After">
                    </div>
                    <div class="img-comp-slider"></div>
                </div> --}}


                <div class="img-comp-container">
                    <div class="img-comp-img">
                        <img loading="lazy" decoding="async" width="2400" height="800"
                            src="https://iconrocklear.com/wp-content/uploads/2023/09/Correction.png"
                            class="attachment-full size-full wp-image-1022" alt=""
                            srcset="https://iconrocklear.com/wp-content/uploads/2023/09/Correction.png 1500w, https://iconrocklear.com/wp-content/uploads/2023/09/Correction-300x160.png 300w, https://iconrocklear.com/wp-content/uploads/2023/09/Correction-1024x546.png 1024w, https://iconrocklear.com/wp-content/uploads/2023/09/Correction-768x410.png 768w"
                            sizes="(max-width: 1500px) 100vw, 1500px" />
                    </div>
                    <div class="img-comp-img img-comp-overlay">
                        <img loading="lazy" decoding="async" width="2400" height="800"
                            src="https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION.png"
                            class="attachment-full size-full wp-image-1023" alt=""
                            srcset="https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION.png 1500w, https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION-300x160.png 300w, https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION-1024x546.png 1024w, https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION-768x410.png 768w"
                            sizes="(max-width: 1500px) 100vw, 1500px" />
                    </div>
                    <div class="img-comp-slider"></div>
                </div>


                <div class="elementor-element elementor-element-13dc195 elementor-widget elementor-widget-bdt-image-compare"
                    data-id="13dc195" data-element_type="widget" data-widget_type="bdt-image-compare.default">
                    <div class="elementor-widget-container">
                        <div class="bdt-image-compare bdt-position-relative">
                            <div id="image-compare-13dc195" class="image-compare"
                                data-settings="{&quot;id&quot;:&quot;image-compare-13dc195&quot;,&quot;default_offset_pct&quot;:57,&quot;before_label&quot;:&quot;Before&quot;,&quot;after_label&quot;:&quot;After&quot;,&quot;add_circle&quot;:true,&quot;add_circle_blur&quot;:true,&quot;smoothing&quot;:true,&quot;smoothing_amount&quot;:400,&quot;bar_color&quot;:&quot;#fff&quot;}">
                                <img loading="lazy" decoding="async" width="1500" height="800"
                                    src="https://iconrocklear.com/wp-content/uploads/2023/09/Correction.png"
                                    class="attachment-full size-full wp-image-1022" alt=""
                                    srcset="https://iconrocklear.com/wp-content/uploads/2023/09/Correction.png 1500w, https://iconrocklear.com/wp-content/uploads/2023/09/Correction-300x160.png 300w, https://iconrocklear.com/wp-content/uploads/2023/09/Correction-1024x546.png 1024w, https://iconrocklear.com/wp-content/uploads/2023/09/Correction-768x410.png 768w"
                                    sizes="(max-width: 1500px) 100vw, 1500px" /> <img loading="lazy" decoding="async"
                                    width="1500" height="800"
                                    src="https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION.png"
                                    class="attachment-full size-full wp-image-1023" alt=""
                                    srcset="https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION.png 1500w, https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION-300x160.png 300w, https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION-1024x546.png 1024w, https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION-768x410.png 768w"
                                    sizes="(max-width: 1500px) 100vw, 1500px" />
                            </div>
                        </div>

                    </div>
                </div>


                {{-- <div class="image-compare-container">
                    <div id="image-compare" style="overflow:hidden !important;" class="image-compare">
                        <img src="https://iconrocklear.com/wp-content/uploads/2023/09/Correction.png" alt="Before">
                        <img src="https://iconrocklear.com/wp-content/uploads/2023/09/PROTECTION.png" alt="After">
                    </div>
                </div> --}}

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
                            <p>At The Armour Lab, we’re dedicated to preserving the beauty and integrity of your vehicle.
                                With
                                over a decade of experience in the automotive protection industry, we specialize in
                                safeguarding
                                your car against the elements. Our expert technicians use advanced technology to apply
                                top-tier
                                Paint Protection Films (PPF) and Icon Rocklear, providing an unparalleled shield that
                                defends
                                your vehicle from scratches, chips, and harmful UV rays. We ensure that your car not only
                                shines
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
    <script src="{{ asset('js/script.js') . config('app.asset') }}"></script>
    <script src="https://unpkg.com/image-compare-viewer@1.6.2/dist/image-compare-viewer.min.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById("image-compare-13dc195");
            var options = {
                // Match these options to those from your WordPress settings
                controlColor: "#fff", // bar_color from data-settings
                controlShadow: true, // Not directly from WP but common option
                addCircle: true, // add_circle from data-settings
                addCircleBlur: true, // add_circle_blur from data-settings
                showLabels: true, // Assuming you want labels since WP version likely had them
                labelOptions: {
                    before: "Before", // before_label from data-settings
                    after: "After", // after_label from data-settings
                    onHover: false, // Adjust based on your needs; not directly from WP settings
                },
                smoothing: true, // smoothing from data-settings
                smoothingAmount: 400, // smoothing_amount from data-settings
                hoverStart: false, // Not directly from WP, set based on preference
                verticalMode: false, // orientation from data-settings (convert to boolean if needed)
                startingPoint: 57, // default_offset_pct from data-settings
                fluidMode: false, // Not directly from WP, set based on preference
            };

            new ImageCompare(element, options).mount();

            // Prevent default behavior on drag start
            // element.addEventListener("mousedown", function(event) {
            //     event.preventDefault();
            // });

            // // For touch devices
            element.addEventListener("touchstart", function(event) {
                event.preventDefault();
            });
            // // Disable scrolling on touch start
            element.addEventListener("touchstart", function(event) {
                document.body.style.overflow = "auto";
            });

            // // Re-enable scrolling on touch end
            // element.addEventListener("touchend", function(event) {
            //     document.body.style.overflow = "";
            // });
        });
    </script>
    <script>
        var cards = [{
                imgSrc: "images/Strentgth.png",
                imgSrcset: "images/Strentgth.png 407w, images/Strentgth-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "75X STRENGTH",
                description: "In tests of tensile strength Icon Rocklear resists heavy damage when compared to any other coating on the market. It’s up to 63 microns of a hard protected surface brings you over 75x the strength when compared to other coatings in the world. Making it the only coating to help with resistance to heavy damage such as real world perils, rock chips, & actual car key scratches.",
            },
            {
                imgSrc: "images/Thicknes.png",
                imgSrcset: "images/Thicknes.png 407w, images/Thicknes-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "35X THICKNESS",
                description: `<ul>
      <li>Icon Rocklear is the most depth efficient coating on the market today. Certified Icon Rocklear technicians can achieve a 2.5 mil or 63 micron depth in a single application. Or for easy math, 35+ times thicker than a Ceramic or Graphene Coating. This eliminates the need for counterproductive paint correction / grind off of your precious protective clear coat as is necessary with Ceramic and Graphene Coatings.<br>Icon Rocklear only adds protection!</li>
      <li>Ceramic Coatings are 1-3 microns.</li>
      </ul>`,
            },
            {
                imgSrc: "images/Brilance-1.png",
                imgSrcset: "images/Brilance-1.png 407w, images/Brilance-1-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "30%+ BRILLIANCE",
                description: `Icon Rocklear is unequalled in its brilliance and clarity. In recent spectrometer testing, Icon Rocklear registered a 97% reflective quality over an 85° angle. This was over a five year old automotive painted surface.  This has never been achieved by any other coating until now. Icon Rocklear’s brilliance is 30% greater than any Ceramic or Graphene coating can achieve even with multiple layers.`,
            },
            {
                imgSrc: "images/Uv.png",
                imgSrcset: "images/Uv.png 407w, images/Uv-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "20X UV WEATHERING",
                description: `<ul><li aria-level="2">ASTM D4587&nbsp; No change in appearance after 4000 hours of extreme UV and condensation exposure</li><li>Up to 20x the UV protection than Ceramic Coatings</li></ul>`,
            },
            {
                imgSrc: "images/Salt.png",
                imgSrcset: "images/Salt.png 407w, images/Salt-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "SALT SPRAY",
                description: `<ul><li aria-level="2">300% more longevity in Salty/Humid environments than any other coating.</li><li aria-level="2">ASTM B117 Withstood 1000 hours with no visible change</li><li aria-level="2">(Premium Professional Ceramics) withstood 350 hours<span style="color: var( --e-global-color-secondary ); font-family: var( --e-global-typography-text-font-family ), Sans-serif;">&nbsp;</span></li></ul>`,
            },
            {
                imgSrc: "images/Scratch.png",
                imgSrcset: "images/Scratch.png 407w, images/Scratch-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "SCRATCH / ABRASION",
                description: `<ul><li aria-level="2">In a lab tested environment, a key was dragged against a 50/50 coated panel. The scratch was started on the non coated area, then to the coated area. The key left a very clear scratch on the non coated area, but the scratch left on the coated area could barely be seen.&nbsp;</li><li>In competitors coatings, the moment it has the swirls or scratches it must be removed, paint corrected and reapplied.</li></ul>`,
            },
            {
                imgSrc: "images/Impact-resistance.png",
                imgSrcset: "images/Impact-resistance.png 407w, images/Impact-resistance-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "IMPACT RESISTANCE",
                description: `<ul><li>Over 50% more Impact Resistance than Ceramics</li><li aria-level="2">Lab tested using ASTM D-2794. Impact resistance at 120 in. Ibs.</li><li aria-level="2">(Premium Professional Ceramics) tested at 80 in. Ibs</li></ul>`,
            },
            {
                imgSrc: "images/PPF-Wrap.png",
                imgSrcset: "images/PPF-Wrap.png 407w, images/PPF-Wrap-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "PPF / WRAP VERSATILITY",
                description: `<div class="bdt-show-hide-content" style="display: block;">
                        <p>Body shops, Tint, Paint Protection Film &amp; Wrap shops, we also got you covered. Icon Rocklear allows for the adhesion of vinyl wrap and PPF on top. Meaning it radiates the brilliance from underneath your film creating an even better finish for film installed, and secondly, it acts as a barrier for future paint peeling incidents if wraps or film is removed. Icon Rocklear also allows for paint refinishing over the surface of Icon Rocklear. It is not necessary to remove.</p><p>See your Icon Rocklear facility for more details.</p>                    </div>`,
            },
            {
                imgSrc: "images/car-adhesion.png",
                imgSrcset: "images/car-adhesion.png 407w, images/car-adhesion-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "ADHESION",
                description: `<ul><li aria-level="2">ASTM D4541 Aluminum was epoxied to the coated surface and pulled off to test adhesion. It took 540psi to separate the car paint from the metal. The coating did not separate from the car paint.</li><li aria-level="2">(Premium Professional Ceramics) uses ASTM D3359 which tests for adhesion using tape.</li></ul>`,
            },
            {
                imgSrc: "images/renewable.png",
                imgSrcset: "images/renewable.png 407w, images/renewable-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "RENEWABLE",
                description: `Specifically because of our ICE technology, Icon Rocklear may be corrected by an Icon Rocklear technician if damaged. Icon Rocklear depth, and strength make correction possible when performed by Icon Rocklear technician. Even in the most perilous of occurrences, Icon Rocklear can be reapplied over itself without removing the basecoat. This makes Icon Rocklear a system for life. Icon Rocklear can achieve a new looking finish for the life of the vehicle or boat! Again, Icon Rocklear is not just another  coating but a system for life.`,
            },
            {
                imgSrc: "images/mandrel-bend-car.png",
                imgSrcset: "images/mandrel-bend-car.png 407w, images/mandrel-bend-car-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "MANDREL BEND",
                description: `<ul><li aria-level="2">ASTM D522 A ⅛ in Bend at 180 degrees was made in the coated panel with no cracking.</li><li aria-level="2">(Premium Professional Ceramics) passed the same test</li></ul>`,
            },
            {
                imgSrc: "images/maintance.png",
                imgSrcset: "images/maintance.png 407w, images/maintance-300x148.png 300w",
                imgSizes: "(max-width: 407px) 100vw, 407px",
                title: "MAINTENANCE",
                description: `Icon Rocklear requires zero maintenance. This eliminates the need for pesky and expensive bi-weekly maintenance washes and expensive yearly recoat costs.`,
            },
            // ... add more card objects ...
        ];
        var progressBars = {
            rocklear: [{
                    label: "SCRATCH RESISTANCE",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "COLOR ENHANCEMENT",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "FEATURE CLARITY",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "COATING THICKNESS (UM+)",
                    value: 35,
                    maxValue: 35
                },
                {
                    label: "UV PROTECTION",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "ROCK CHIP RESISTANCE",
                    value: 40,
                    maxValue: 100
                },
                {
                    label: "CHEMICAL PROTECTION",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "SALT SPRAY",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "IMPACT ABSORPTION (IN LBS)",
                    value: 120,
                    maxValue: 100
                }, // Note: The value here is above the maxValue.
                {
                    label: "FLEXIBILITY",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "LONGEVITY",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "WARRANTY",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "DURABILITY",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "CLEAR COAT REDUCTION",
                    value: 5,
                    maxValue: 100
                },
                {
                    label: "YEARLY RECOATS COSTS",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "MANDATORY MAINTENANCE",
                    value: 0,
                    maxValue: 100
                },
            ],
            ceramic: [{
                    label: "SCRATCH RESISTANCE",
                    value: 10,
                    maxValue: 100
                },
                {
                    label: "COLOR ENHANCEMENT",
                    value: 60,
                    maxValue: 100
                },
                {
                    label: "FEATURE CLARITY",
                    value: 30,
                    maxValue: 100
                },
                {
                    label: "COATING THICKNESS (UM+)",
                    value: 2.5,
                    maxValue: 35
                },
                {
                    label: "UV PROTECTION",
                    value: 50,
                    maxValue: 100
                },
                {
                    label: "ROCK CHIP RESISTANCE",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "CHEMICAL PROTECTION",
                    value: 10,
                    maxValue: 100
                },
                {
                    label: "SALT SPRAY",
                    value: 30,
                    maxValue: 100
                },
                {
                    label: "IMPACT ABSORPTION (IN LBS)",
                    value: 80,
                    maxValue: 100
                },
                {
                    label: "FLEXIBILITY",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "LONGEVITY",
                    value: 25,
                    maxValue: 100
                },
                {
                    label: "WARRANTY",
                    value: 25,
                    maxValue: 100
                },
                {
                    label: "DURABILITY",
                    value: 20,
                    maxValue: 100
                },
                {
                    label: "CLEAR COAT REDUCTION",
                    value: 60,
                    maxValue: 100
                },
                {
                    label: "YEARLY RECOATS COSTS",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "MANDATORY MAINTENANCE",
                    value: 100,
                    maxValue: 100
                },
            ],
            polymers: [{
                    label: "SCRATCH RESISTANCE",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "COLOR ENHANCEMENT",
                    value: 20,
                    maxValue: 100
                },
                {
                    label: "FEATURE CLARITY",
                    value: 15,
                    maxValue: 100
                },
                {
                    label: "COATING THICKNESS",
                    value: 0,
                    maxValue: 35
                },
                {
                    label: "UV PROTECTION",
                    value: 15,
                    maxValue: 100
                },
                {
                    label: "ROCK CHIP RESISTANCE",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "CHEMICAL PROTECTION",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "SALT SPRAY",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "IMPACT ABSORPTION",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "FLEXIBILITY",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "LONGEVITY",
                    value: 5,
                    maxValue: 100
                },
                {
                    label: "WARRANTY",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "DURABILITY",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "CLEAR COAT REDUCTION",
                    value: 0,
                    maxValue: 100
                },
                {
                    label: "YEARLY RECOATS COSTS",
                    value: 100,
                    maxValue: 100
                },
                {
                    label: "MANDATORY MAINTENANCE",
                    value: 100,
                    maxValue: 100
                },
            ],
        };
    </script>
@endsection
