@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
    <title>Icon Rock Lear</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    {{-- <link rel="stylesheet" href="https://unpkg.com/image-compare-viewer/dist/image-compare-viewer.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/ep-marquee.css') . config('app.asset') }}" />

    <link rel="stylesheet" href="{{ asset('icon_rocklear/css/style.css') . config('app.asset') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://iconrocklear.com/wp-content/plugins/bdthemes-element-pack/assets/css/ep-image-compare.css?ver=7.1.0">


    <style>
        /* div#comparison {
                                width: 60vw;
                                height: 60vw;
                                max-width: 600px;
                                max-height: 600px;
                                overflow: hidden;
                            } */

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
@endsection

@section('content')
    <main>
        <!--
                |--------------------------------------------------------------------------
                | Section 1
                |--------------------------------------------------------------------------
                -->
        <section class="section-1">
            <div class="section-1-container">
                @if(request("thankyou"))
                <div class="alert alert-success" style="background:#0d9344">
                    <h3 >Thank your for your Inquiry one of our team members will be in touch shortly</h3>
                <h6 style="text-align: center" class="text-center">For faster service or to book your appointment please call <a href="tel:+416-675-6853">416-675-6853</a></h6>
                </div>
                @endif
                <h2 class="main-title"><span>Icon</span> Rocklear</h2>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="left">
                            <div>
                                <h4 class="secondary-title">
                                    NOT ALL COATINGS ARE CREATED EQUAL
                                </h4>
                                <a class="cta-primary" href="{{ route('frontend.contact') }}">
                                    <span>Inquire Now</span>
                                </a>
                            </div>

                            <div class="icon-list-container">
                                <ul class="icon-list">
                                    <li class="icon-list-item">
                                        <span class="icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-circle"></i>
                                        </span>
                                        <span class="icon-list-text">AUTO</span>
                                    </li>
                                    <li class="icon-list-item">
                                        <span class="icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-circle"></i>
                                        </span>
                                        <span class="icon-list-text">MARINE</span>
                                    </li>
                                    <li class="icon-list-item">
                                        <span class="icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-circle"></i>
                                        </span>
                                        <span class="icon-list-text">AVIATION</span>
                                    </li>
                                    <li class="icon-list-item">
                                        <span class="icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-circle"></i>
                                        </span>
                                        <span class="icon-list-text">TRUCKING</span>
                                    </li>
                                    <li class="icon-list-item">
                                        <span class="icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-circle"></i>
                                        </span>
                                        <span class="icon-list-text">AGRICULTURE</span>
                                    </li>
                                </ul>
                                <div class="icon-list-text">
                                    <p>
                                        Scientifically Confirmed Protection , Correction &amp;
                                        Brilliance
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="right">
                            <!-- Swiper -->
                            <div>
                                <div class="swiper swiperFirst">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img decoding="async" width="843" height="588"
                                                src="images/Layer-4-copy.png" class="attachment-full size-full"
                                                alt=""
                                                srcset="
                            images/Layer-4-copy.png         843w,
                            images/Layer-4-copy-300x209.png 300w,
                            images/Layer-4-copy-768x536.png 768w
                          "
                                                sizes="(max-width: 843px) 100vw, 843px" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img loading="lazy" decoding="async" width="789" height="588"
                                                src="images/Aviations.png" class="attachment-full size-full" alt=""
                                                srcset="
                            images/Aviations.png         789w,
                            images/Aviations-300x224.png 300w,
                            images/Aviations-768x572.png 768w
                          "
                                                sizes="(max-width: 789px) 100vw, 789px" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img loading="lazy" decoding="async" width="1006" height="646"
                                                src="images/Agriculture-min.png" class="attachment-full size-full"
                                                alt=""
                                                srcset="
                            images/Agriculture-min.png         1006w,
                            images/Agriculture-min-300x193.png  300w,
                            images/Agriculture-min-768x493.png  768w
                          "
                                                sizes="(max-width: 1006px) 100vw, 1006px" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img loading="lazy" decoding="async" width="1019" height="588"
                                                src="images/Trucking-min.png" class="attachment-full size-full"
                                                alt=""
                                                srcset="
                            images/Trucking-min.png         1019w,
                            images/Trucking-min-300x173.png  300w,
                            images/Trucking-min-768x443.png  768w
                          "
                                                sizes="(max-width: 1019px) 100vw, 1019px" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img decoding="async" width="908" height="588" src="images/Auto-min.png"
                                                class="attachment-full size-full" alt=""
                                                srcset="
                            images/Auto-min.png         908w,
                            images/Auto-min-300x194.png 300w,
                            images/Auto-min-768x497.png 768w
                          "
                                                sizes="(max-width: 908px) 100vw, 908px" />
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-5 swiper-controls">
                                        <div class="swiper-button-prev-first">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>

                                        <div class="swiper-pagination-first text-white w-auto"></div>
                                        <div class="swiper-button-next-first">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Include the Swiper JS here or at the end of the body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 2
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <section class="section-2">
            <div id="marqueeContainer" class="marquee-container">
                <div class="marquee-content">
                    <span class="text">
                        <span style="color: #108d19">ICON ROCKLEAR</span> -
                        <span>75x stronger</span> - <span>35x thicker</span> -
                    </span>
                    <span class="text">
                        <span style="color: #108d19">ICON ROCKLEAR</span> -
                        <span>75x stronger</span> - <span>35x thicker</span> -
                    </span>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 3
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <section class="section-3">
            <div class="section-container">
                <div>
                    <h4 class="header-title-small">
                        THE WORLD'S ONE AND ONLY SYSTEM FOR LIFE.
                    </h4>
                    <hr class="hr-dark" />
                    <h2 class="header-title">EXPERIENCE</h2>
                    <div class="section-3-content">
                        <div class="empty-box"></div>
                        <p class="section-content">
                            Icon Rocklear is the most cutting edge surface protection
                            technology in the world today that’s 75x Stronger than other
                            coatings. The only coating to achieve sheer strength, brilliance
                            and depth correction capabilities – Making it the world’s best
                            all in one system.
                        </p>
                    </div>
                    <hr class="hr-light" />
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 4
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <section class="section-4">
            <div class="section-container">
                <div class="flex">
                    <div class="column">
                        <img loading="lazy" decoding="async" width="562" height="384"
                            src="images/oRANGE-TRUCK.png" class="attachment-large size-large wp-image-1416"
                            alt=""
                            srcset="
                  images/oRANGE-TRUCK.png         562w,
                  images/oRANGE-TRUCK-300x205.png 300w
                "
                            sizes="(max-width: 562px) 100vw, 562px" />
                    </div>
                    <div class="column">
                        <div class="flex">
                            <div class="column">
                                <h4 class="header-title-small">NEW UNITS</h4>
                                <p>
                                    The global leader in surface protection. <br />
                                    <br />
                                    Unquestionably escustomTablished armour protection.
                                    Longevity, strength, and brilliance are absolutely
                                    guaranteed for peace of mind past any other coating seen
                                    before.
                                </p>
                            </div>
                            <div class="column">
                                <h4 class="header-title-small">PRE-OWNED UNITS</h4>
                                <p>
                                    In addition to the armour provided by Icon Rocklear, you
                                    also get the world renowned correction on worn and weathered
                                    finishes that Icon Rocklear has become famous for. Best of
                                    all, Icon does it all without clearcoat reduction!
                                </p>
                            </div>
                        </div>
                        <div class="cta-btns">
                            {{-- <a href="#" class="cta-primary">Find an Installer</a> --}}
                            <a href="{{ route('icon-rocklear.contact') }}" class="cta-primary">Become an
                                installer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 5
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <section class="section-5">
            <div class="section-container">
                <div class="text-center">
                    <h4 class="header-title-small">OUR STATISTICS</h4>
                    <hr class="hr-light" />
                    <h2 class="header-title">GLOBAL NETWORK</h2>
                </div>
                <div class="flex">
                    <div class="column">
                        <div class="section-5-content-1">
                            <h3 class="section-5-content-heading">100 +</h3>
                            <p class="section-5-content">
                                CERTIFIED INSTALLATION FACILITIES WORLDWIDE
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="section-5-content-2">
                            <h3 class="section-5-content-heading">70,000 +</h3>
                            <p class="section-5-content">
                                VEHICLES, VESSELS & AIRPLANES COATED
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="section-5-content-3">
                            <h3 class="section-5-content-heading">Zero</h3>
                            <p class="section-5-content">FAILURES</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 6
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <section class="section-6">
            <div class="section-container">
                <div>
                    <h4 class="header-title-small">
                        I.C.E TECHNOLOGY: INTERLOCKING COATING ENFORCEMENT
                    </h4>
                    <hr class="hr-dark" />
                    <h2 class="header-title">A SYSTEM FOR LIFE</h2>
                    <div class="flex">
                        <div class="column">
                            <h4 class="header-title-small">
                                WE ARE BORN FROM THE FAILURES OF OUR COMPETITORS...AND OUR
                                OWN.
                            </h4>
                            <p class="section-content">
                                Our team of developers have been involved with coating science
                                as far back as 2012. We have always had coatings that were
                                superior to our competitors at the time. But with the advent
                                of ceramic coatings and stronger sealants, we realized that we
                                had to be better, much better, to stay ahead of the
                                competition. <br />

                                We decided it would be an all or nothing venture. We set out
                                in a completely new direction, researching the best materials
                                to build a new coating system with. <br />

                                2016 saw Icon Rocklear produce its first prototype. Field
                                testing was immediately commissioned on 100+ vehicles. Know
                                that we intentionally chose one of the most climate varied
                                places on earth to test in this region. Temperatures can vary
                                from -58°C(-72°F) to 45°C(113°F). Road conditions are also
                                atrocious. Gravel, ice, sleet, heavy rain, intense, UV, and
                                the list goes on. <br />

                                Icon Rocklear valiantly protected in these conditions without
                                a single failure. Remarkable to say the least. <br />

                                Still, the future needed to be solidified with this remarkable
                                coating system for further peace of mind. <br />

                                Icon Rocklear accelerated lab data testing was commissioned
                                and it did not disappoint. The results were astonishing, and
                                the indisputable, beautiful proof that Icon Rocklear would
                                protect thoroughly through any peril for many years. Peace of
                                mind protection confirmed. <br />
                            </p>
                        </div>
                        <div class="column iframe-container">
                            <iframe class="elementor-video" frameborder="0" allowfullscreen=""
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                title="Icon Rocklear Animated Explainer"
                                src="https://www.youtube.com/embed/F2qQ3baxQJg?controls=1&rel=0&playsinline=0&modestbranding=0&autoplay=0&enablejsapi=1&origin=https%3A%2F%2Ficonrocklear.com&widgetid=1"
                                id="widget2" __idm_id__="40304641"></iframe>
                        </div>
                    </div>
                    <hr class="hr-light" />
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 7
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <div class="section-7-bg"></div>

        <section class="section-7">
            <div class="section-container">
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
                                                                                  | Section 8
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <section class="section-8">
            <div class="section-container">
                <div class="">
                    <div class="customTab-custom">
                        <div>
                            <div class="my-custom-customTabs d-flex justify-content-between w-100 bg-white">
                                <button class="customTab cta-btns cta-primary" data-customTab="Guaranteed">
                                    GUARANTEED
                                </button>
                                <button class="customTab" data-customTab="Performance">
                                    Performance
                                </button>
                                <button class="customTab" data-customTab="Versatility">
                                    VERSATILITY
                                </button>
                                <button class="customTab" data-customTab="Exclusive">
                                    EXCLUSIVE
                                </button>
                            </div>
                            <hr />
                        </div>

                        <div id="Guaranteed" class="customTab-content border-none mt-5">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <h2 class="header-title fs-1">GUARANTEED</h2>
                                    <h4 class="header-title-small fs-6 text-uppercase">
                                        lifetime workmanship
                                    </h4>
                                    <hr class="hr-light bg-dark" />

                                    <p>
                                        Every installation of Icon Rocklear comes with a lifetime
                                        workmanship warranty. Your warranty does not only cover
                                        the installation from your selected facility, but the
                                        peace of mind warranty across the entire world no matter
                                        where you move.&nbsp;
                                    </p>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="image-area">
                                        <img loading="lazy" decoding="async" width="608" height="429"
                                            src="images/Backed.png"
                                            class="attachment-large img-fluid size-large wp-image-1006" alt=""
                                            srcset="
                          images/Backed.png         608w,
                          images/Backed-300x212.png 300w
                        "
                                            sizes="(max-width: 608px) 100vw, 608px" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Performance" class="customTab-content">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <h2 class="header-title fs-1">Performance</h2>
                                    <h4 class="header-title-small fs-6 text-uppercase">
                                        stronger. thicker. brilliant
                                    </h4>
                                    <hr class="hr-light bg-dark" />

                                    <p>
                                        Icon Rocklear is the toughest coating on the market, and
                                        it’s not even close. Its unique chemistry provides a
                                        rock-like bond for the best long-term protection in the
                                        world today.&nbsp;
                                    </p>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="image-area">
                                        <img loading="lazy" decoding="async" width="608" height="340"
                                            src="images/Performance.png" class="attachment-large size-large wp-image-1012"
                                            alt=""
                                            srcset="
                          images/Performance.png         608w,
                          images/Performance-300x168.png 300w
                        "
                                            sizes="(max-width: 608px) 100vw, 608px" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Versatility" class="customTab-content">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <h2 class="header-title fs-1">VERSATILITY</h2>
                                    <h4 class="header-title-small fs-6 text-uppercase">
                                        protection film / wrap
                                    </h4>
                                    <hr class="hr-light bg-dark" />

                                    <p>
                                        Icon Rocklear allows for paint protection film and vinyl
                                        wraps to adhere on top of the coating system. So if you
                                        decide to add your own customization, Icon Rocklear will
                                        remain and act as a protective barrier for your paint.
                                    </p>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="image-area">
                                        <img loading="lazy" decoding="async" width="608" height="375"
                                            src="images/Versatality.png" class="attachment-large size-large wp-image-1008"
                                            alt=""
                                            srcset="
                          images/Versatality.png         608w,
                          images/Versatality-300x185.png 300w
                        "
                                            sizes="(max-width: 608px) 100vw, 608px" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Exclusive" class="customTab-content">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <h2 class="header-title fs-1">EXCLUSIVE</h2>
                                    <h4 class="header-title-small fs-6 text-uppercase">
                                        trained professionals
                                    </h4>
                                    <hr class="hr-light bg-dark" />

                                    <p>
                                        Icon Rocklear, unlike many other coatings and ceramics
                                        available, requires professional training and installation
                                        facilities
                                    </p>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="image-area">
                                        <img loading="lazy" decoding="async" width="608" height="435"
                                            src="images/Exclusive.png" class="attachment-large size-large wp-image-1010"
                                            alt=""
                                            srcset="
                          images/Exclusive.png         608w,
                          images/Exclusive-300x215.png 300w
                        "
                                            sizes="(max-width: 608px) 100vw, 608px" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customTab-controls">
                            <button class="prev-btn">&#10094; Prev</button>
                            <span class="customTab-pagination">1/4</span>
                            <button class="next-btn">Next &#10095;</button>
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

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 10
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <div class="section-10-bg"></div>
        <section class="section-10 mt-5">
            <div class="section-container">
                <h4 class="header-title-small">SINGLE LAYER</h4>
                <hr class="hr-dark" />
                <h2 class="header-title">ULTIMATE PROTECTION</h2>

                <div class="row h-100">
                    <div class="col-lg-4 col-md-12 justify-content-between d-flex flex-column">
                        <div class="text-center">
                            <h5 class="fw-bolder">
                                SCIENTIFICALLY LAB <br />
                                TESTED PROTECTION
                            </h5>
                            <hr class="hr-light" />
                            <h6 class="fw-bold">
                                15 YEARS FOR AUTOMOTIVE <br />
                                15 YEARS FOR HEAVY DUTY <br />
                                15 YEARS FOR AVIATION <br />
                                7 YEARS FOR MARINE
                            </h6>
                        </div>
                        <div class="cta-btns">
                            <a href="{{ route('frontend.contact') }}" class="cta-primary w-100">Inquire</a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row gap-0 gy-3 mt-4">
                            <div class="col-lg-3 col-md-3 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="img-fluid" width="80" src="images/Vector-Smart-Object-3.png"
                                            alt="" />
                                        <h6 class="mt-3">75X STRONGER THAN ANY OTHER COATING</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="img-fluid" width="80" src="images/Vector-Smart-Object411.png"
                                            alt="" />
                                        <h6 class="mt-3">
                                            20X UV <br />
                                            PROTECTION THAN ANY OTHER COATING
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="img-fluid" width="80" src="images/guarantee-certificate1.png"
                                            alt="" />
                                        <h6 class="mt-3">
                                            30% MORE BRILLIANCE <br />
                                            THAN ANY OTHER COATING
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="img-fluid" width="80" src="images/Vector-Smart-Object-4.png"
                                            alt="" />
                                        <h6 class="mt-3">
                                            35X THICKER <br />
                                            THAN OTHER COATINGS
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="img-fluid" width="80" src="images/Vector-Smart-Object1.png"
                                            alt="" />
                                        <h6 class="mt-3">ACTUAL SCRATCH/SCUFF RESISTANCE</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="img-fluid" width="80" src="images/6.png" alt="" />
                                        <h6 class="mt-3">
                                            ACTUAL <br />
                                            ROCK CHIP RESISTANCE
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="img-fluid" width="80" src="images/Vector-Smart-Object-5.png"
                                            alt="" />
                                        <h6 class="mt-3">ZERO MAINTENANCE</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="img-fluid" width="80" src="images/Vector-Smart-Object-6.png"
                                            alt="" />
                                        <h6 class="mt-3">INCREASED RESALE VALUE</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 11
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <div class="section-11-bg mt-5"></div>
        <section class="section-11">
            <div class="section-container">
                <h4 class="header-title-small">SINGLE LAYER</h4>
                <hr class="hr-dark" />
                <h2 class="header-title">CORRECTION ABILITIES</h2>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="iframe-container">
                            <iframe class="elementor-video" frameborder="0" allowfullscreen=""
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                title="Icon Rocklear Protection and Correction" width="440" height="360"
                                src="https://www.youtube.com/embed/Y64MWlBVmz8?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Ficonrocklear.com&amp;widgetid=1"
                                id="widget2" __idm_id__="56844289"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h6 class="text-secondary">
                            IN A SINGLE LAYER, ICON ROCKLEAR CAN ACHIEVE UP TO 2.5 MILS (63
                            MICRONS). ICON ROCKLEAR HAS THE UNRIVALED ABILITY TO RENEW YOUR
                            FINISH WITHOUT HAVING TO REDUCE YOUR CLEAR / GEL COAT.
                        </h6>

                        <div class="row gap-0 gy-3">
                            <div class="col-lg-4 col-md-4 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="" width="54" height="61" src="images/Group-26-4.png"
                                            alt="" />
                                        <h6 class="mt-3">SCRATCHES</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="" width="54" height="61" src="images/Group-26-4.png"
                                            alt="" />
                                        <h6 class="mt-3">HARD WATER SPOTS</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="" width="54" height="61" src="images/Group-26-4.png"
                                            alt="" />
                                        <h6 class="mt-3">BIRD ECTHING</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="" width="54" height="61" src="images/Group-26-4.png"
                                            alt="" />
                                        <h6 class="mt-3">SWIRLS</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="" width="54" height="61" src="images/Group-26-4.png"
                                            alt="" />
                                        <h6 class="mt-3">CHEMICAL DAMAGE</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="" width="54" height="61" src="images/Group-26-4.png"
                                            alt="" />
                                        <h6 class="mt-3">THIN CLEAR COAT</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="" width="54" height="61" src="images/Group-26-4.png"
                                            alt="" />
                                        <h6 class="mt-3">GRAVEL RASH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="" width="54" height="61" src="images/Group-26-4.png"
                                            alt="" />
                                        <h6 class="mt-3">TREE SAP ETCHING</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <img class="" width="54" height="61" src="images/Group-26-4.png"
                                            alt="" />
                                        <h6 class="mt-3">COLOR DEPTH & GLOSS</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 12
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <div class="section-12-bg"></div>
        <section class="section-12">
            <div class="section-container">
                <h2 class="header-title-small text-center text-secondary">
                    ULTIMATE PROTECTION
                </h2>
                <hr class="hr-light" />
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body pb-5 pt-3">
                                <div class="text-center">
                                    <img src="images/security.png" width="79" height="100" alt="" />
                                    <h4 style="font-weight: 800" class="text-white mt-5">
                                        SCIENTIFICALLY TESTED
                                    </h4>
                                    <p class="text-white mt-3">
                                        Icon Rocklear is science and time tested to guarantee you
                                        and your vehicle or vessel the peace of mind that will
                                        provide superior protection, brilliance and satisfaction
                                        for many years.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body pb-5 pt-3">
                                <div class="text-center">
                                    <img src="images/world.png" width="95" height="95" alt="" />
                                    <h4 style="font-weight: 800" class="text-white mt-5">
                                        DISTRIBUTION
                                    </h4>
                                    <p class="text-white mt-3">
                                        Icon Rocklear has world wide distribution with application
                                        facilities present in many countries on five continents
                                        <br />
                                        Be sure to look for a distributor or application facility
                                        near you.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body pb-5 pt-3">
                                <div class="text-center">
                                    <img src="images/spray-can.png" width="52" height="98" alt="" />
                                    <h4 style="font-weight: 800" class="text-white mt-5">
                                        LATEST TECHNOLOGY
                                    </h4>
                                    <p class="text-white mt-3">
                                        Icon Rocklear was forged by blending higher tensile,
                                        brilliance, and volume materials from the industries of
                                        Aviation, Automotive, and Marine making it a truly
                                        remarkable marvel for all surface protection.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cta-btn mt-5 pt-5 text-center">
                    <a href="{{ route('frontend.contact') }}" class="cta-primary">
                        <span class="btn-text">A SYSTEM FOR LIFE</span>
                    </a>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 13
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <section class="section-13 mt-5">
            <div class="section-container">
                <h4 class="header-title-small">LAB TESTED RESULTS</h4>
                <hr class="hr-dark" />
                <h2 class="header-title">ROCKLEAR BENEFITS</h2>
                <div id="cards-container" class="row">
                    <!--
                                                                                        |--------------------------------------------------------------------------
                                                                                        | Content coming from footer
                                                                                        |--------------------------------------------------------------------------
                                                                                        -->
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 14
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <div class="section-14-bg"></div>
        <section class="section-14">
            <div class="section-container">
                <h4 class="header-title-small">PLUS</h4>
                <hr class="hr-light" />
                <h2 class="header-title text-white">WARRANTY</h2>
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <h6 class="open-text text-white">
                            15 YEAR WARRANTY FOR AUTOMOTIVE
                        </h6>
                        <div style="display:block;" class="openable-text">
                            <p>
                                All <span>Icon</span> <span>Rocklear</span> installers and
                                application facilities warranty <span>Icon</span>
                                <span>Rocklear </span>workmanship for life.
                            </p>
                            <p>
                                <span>Icon</span>
                                <span>Rocklear</span> provides a 15+ year warranty against
                                defects in the coating efficiency. This includes but not
                                limited to:
                            </p>
                            <p>BOND, PREMATURE FADING, PEELING, CRACKING, YELLOWING ETC…</p>
                            <p>
                                See your local application facility or technician for details
                            </p>
                        </div>

                        <h6 class="open-text text-white">
                            7 year WARRANTY FOR MARINE Gel coat
                        </h6>
                        <div class="openable-text"></div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="image-are">
                            <img loading="lazy" decoding="async" width="800" height="446"
                                src="images/Group-26-5.png" class="img-fluid" alt=""
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

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 15
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <div class="section-15-bg"></div>
        <section class="section-15">
            <div class="section-container">
                <h4 class="header-title-small text-light">
                    UPCOMING PRODUCTS FOR ALL SURFACES PROTECTION
                </h4>
                <hr class="hr-light" />
                <h2 class="header-title text-white">STAY TUNED</h2>
                <div class="row gap-3">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <img class="img-fluid" src="images/Comming-soon.png" alt="" />
                        <hr class="hr-light" />
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-1"></div>
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <img class="img-fluid" src="images/Comming-soon.png" alt="" />
                        <hr class="hr-light" />
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <img class="img-fluid" src="images/Screenshot-at-Aug-27-15-57-43.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <div class="section-15-bg-2"></div>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 16
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <section class="section-16">
            <div class="section-container">
                <hr class="hr-dark" />
                <div class="row">
                    <div class="col-sm 12 col-md-12 col-lg-6">
                        <h2 class="elementor-heading-title elementor-size-default">
                            CONSTANT <span class="stroke-black">Improvment</span><br />
                            &amp; INNOVATION
                        </h2>
                    </div>
                    <div class="col-sm 12 col-md-12 col-lg-6">
                        <div class="title-wrapper">
                            <h4 style="font-weight: 800; font-size: 20px" class="mt-3">
                                ICON ROCKLEAR
                            </h4>
                        </div>
                        <hr class="hr-light" />
                        <div>
                            <p>
                                At Icon Rocklear, we are forever surging forward with new
                                ideas and technology. In 2023 we developed our ICE technology
                                (interlocking, coating enforcement) which gives Icon the
                                opportunity to further strengthen your finish with increased
                                depth without any clearcoat/finish reduction!
                            </p>
                            <p>
                                Additionally we recently recommissioned additional
                                spectrometer testing to prove that we have the undisputed most
                                brilliant coating system on the planet.
                            </p>
                            <p>
                                And we didn’t stop there, our developers presented us
                                with&nbsp; our R.I.P. decontamination compound that assists in
                                the removal of heavy contaminants such as: Failed
                                Ceramic/Graphene coatings, sealants, semi permanent coatings,
                                <br />and industrial overspray. We also plan to have new
                                developments for features with Icon Rocklear in 2024. Follow
                                us for these exciting new developments!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 17
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <div class="section-17-bg"></div>
        <section class="section-17">
            <div class="section-container">
                <div class="text-center">
                    <h4 class="header-title-small">THE ICON ROCKLEAR</h4>
                    <hr class="hr-dark" />
                    <h2 class="header-title">SHOWCASE</h2>
                </div>
            </div>
            <!-- Swiper Container -->
            <div #swiperRef="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/image_6487327-scaled.jpg" alt="Image Description" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/image_6487327-2-scaled.jpg" alt="Image Description" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/image_6483441-scaled.jpg" alt="Image Description" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/image_6487327-3-scaled.jpg" alt="Image Description" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 18
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <div class="section-15-bg section-18-bg"></div>
        <section class="section-15 section-18">
            <div class="section-container">
                <h4 class="header-title-small text-light text-center">
                    INSTALLATION FACILITIES
                </h4>
                <hr class="hr-light" />
                <h2 class="header-title text-center text-white">WORLDWIDE</h2>
                <div class="row gap-3">
                    <div class="image-area">
                        <img src="images/Full-map.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <div class="section-15-bg-2"></div>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 19
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <section class="section-19 mt-5">
            <div class="section-container">
                <div class="section-header">
                    <h4 class="header-title-small">TESTIMONIALS</h4>
                    <hr class="hr-dark" />
                    <h2 class="header-title">HAPPY CUSTOMER</h2>

                    <div class="row wrap-reverse">
                        <div class="col-md-12 col-lg-4"></div>
                        <div class="col-md-12 col-lg-8">
                            <div class="swiper swiperFirst">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="customer-review-container">
                                            <div style="padding-top: 35px" class="d-flex justify-content-between">
                                                <div class="title-wrapper">Harry r.</div>
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <span>5.0 RATING</span>
                                                </div>
                                            </div>
                                            <hr />
                                            <div>
                                                <h3 class="text-uppercase">
                                                    transformation of a lifetime
                                                </h3>
                                                <p>
                                                    Find it hard in words to describe what Icon Rocklear
                                                    did to my 1972 Mercedes. I had been in talks with
                                                    shops for a repaint for over 20k, and despite the
                                                    cost, I wanted to keep the original paint. I found
                                                    Icon Rocklear and went with the Hail Mary. I could
                                                    not believe the transformation, I constantly have
                                                    events and people asking me to show my car our
                                                    vehicle, constant questions asking if it was
                                                    repainted, still cannot believe it. I now have 5 of
                                                    my vehicles protected with Rocklear, new or old,
                                                    this protection is next level!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="customer-review-container">
                                            <div style="padding-top: 35px" class="d-flex justify-content-between">
                                                <div class="title-wrapper">Harry r.</div>
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <span>5.0 RATING</span>
                                                </div>
                                            </div>
                                            <hr />
                                            <div>
                                                <h3 class="text-uppercase">
                                                    transformation of a lifetime
                                                </h3>
                                                <p>
                                                    Find it hard in words to describe what Icon Rocklear
                                                    did to my 1972 Mercedes. I had been in talks with
                                                    shops for a repaint for over 20k, and despite the
                                                    cost, I wanted to keep the original paint. I found
                                                    Icon Rocklear and went with the Hail Mary. I could
                                                    not believe the transformation, I constantly have
                                                    events and people asking me to show my car our
                                                    vehicle, constant questions asking if it was
                                                    repainted, still cannot believe it. I now have 5 of
                                                    my vehicles protected with Rocklear, new or old,
                                                    this protection is next level!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="customer-review-container">
                                            <div style="padding-top: 35px" class="d-flex justify-content-between">
                                                <div class="title-wrapper">Harry r.</div>
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <span>5.0 RATING</span>
                                                </div>
                                            </div>
                                            <hr />
                                            <div>
                                                <h3 class="text-uppercase">
                                                    transformation of a lifetime
                                                </h3>
                                                <p>
                                                    Find it hard in words to describe what Icon Rocklear
                                                    did to my 1972 Mercedes. I had been in talks with
                                                    shops for a repaint for over 20k, and despite the
                                                    cost, I wanted to keep the original paint. I found
                                                    Icon Rocklear and went with the Hail Mary. I could
                                                    not believe the transformation, I constantly have
                                                    events and people asking me to show my car our
                                                    vehicle, constant questions asking if it was
                                                    repainted, still cannot believe it. I now have 5 of
                                                    my vehicles protected with Rocklear, new or old,
                                                    this protection is next level!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="customer-review-container">
                                            <div style="padding-top: 35px" class="d-flex justify-content-between">
                                                <div class="title-wrapper">Harry r.</div>
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <span>5.0 RATING</span>
                                                </div>
                                            </div>
                                            <hr />
                                            <div>
                                                <h3 class="text-uppercase">
                                                    transformation of a lifetime
                                                </h3>
                                                <p>
                                                    Find it hard in words to describe what Icon Rocklear
                                                    did to my 1972 Mercedes. I had been in talks with
                                                    shops for a repaint for over 20k, and despite the
                                                    cost, I wanted to keep the original paint. I found
                                                    Icon Rocklear and went with the Hail Mary. I could
                                                    not believe the transformation, I constantly have
                                                    events and people asking me to show my car our
                                                    vehicle, constant questions asking if it was
                                                    repainted, still cannot believe it. I now have 5 of
                                                    my vehicles protected with Rocklear, new or old,
                                                    this protection is next level!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="customer-review-container">
                                            <div style="padding-top: 35px" class="d-flex justify-content-between">
                                                <div class="title-wrapper">Harry r.</div>
                                                <div>
                                                    <i class="fas fa-star"></i>
                                                    <span>5.0 RATING</span>
                                                </div>
                                            </div>
                                            <hr />
                                            <div>
                                                <h3 class="text-uppercase">
                                                    transformation of a lifetime
                                                </h3>
                                                <p>
                                                    Find it hard in words to describe what Icon Rocklear
                                                    did to my 1972 Mercedes. I had been in talks with
                                                    shops for a repaint for over 20k, and despite the
                                                    cost, I wanted to keep the original paint. I found
                                                    Icon Rocklear and went with the Hail Mary. I could
                                                    not believe the transformation, I constantly have
                                                    events and people asking me to show my car our
                                                    vehicle, constant questions asking if it was
                                                    repainted, still cannot believe it. I now have 5 of
                                                    my vehicles protected with Rocklear, new or old,
                                                    this protection is next level!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="swiper-button-prev-first">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="swiper-pagination-first"></div>
                                    <div class="swiper-button-next-first">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 20
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <section class="section-20 py-5 mt-5">
            <div class="section-container py-5 mt-5">
                <div class="d-flex gap-4 pt-3 flex-column align-items-center justify-content-center">
                    <h2 class="h2-1">GET STARTED</h2>
                    <h2 class="text-white h2-2">PROTECT YOUR</h2>
                    <img loading="lazy" decoding="async" width="800" height="76" src="images/Investments.png"
                        class="img-fluid" alt=""
                        srcset="
                images/Investments.png        942w,
                images/Investments-300x28.png 300w,
                images/Investments-768x73.png 768w
              "
                        sizes="(max-width: 800px) 100vw, 800px" />
                    <div class="cta-btns mt-5 mb-5">
                        <a href="{{ route('frontend.contact') }}" rel="noopener noreferrer">
                            <button class="cta-primary">INQUIRIES</button>
                        </a>
                        <a href="{{ route('icon-rocklear.contact') }}" rel="noopener noreferrer">
                            <button class="cta-primary">BECOME AN INSTALLER</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 21
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->

        <section class="section-21">
            <div class="section-container">
                <h2 class="header-title-small">AS FEATURED ON</h2>
                <hr class="hr-dark" />
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body text-center py-5">
                                <img loading="lazy" decoding="async" width="237" height="46"
                                    src="images/Motor.png" class="img-fluid" alt="" />
                                <img loading="lazy" decoding="async" width="330" height="3"
                                    src="images/Rectangle-10-copy-1.png" class="mt-4 img-fluid" alt=""
                                    srcset="
                      images/Rectangle-10-copy-1.png       330w,
                      images/Rectangle-10-copy-1-300x3.png 300w
                    "
                                    sizes="(max-width: 330px) 100vw, 330px" />
                                <h3 class="mt-4">MOTOR TREND TV</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body text-center py-5">
                                <img loading="lazy" decoding="async" width="243" height="52"
                                    src="images/Mens.png" class="img-fluid" alt="" />
                                <img loading="lazy" decoding="async" width="330" height="3"
                                    src="images/Rectangle-10-copy-1.png" class="mt-4 img-fluid" alt=""
                                    srcset="
                      images/Rectangle-10-copy-1.png       330w,
                      images/Rectangle-10-copy-1-300x3.png 300w
                    "
                                    sizes="(max-width: 330px) 100vw, 330px" />
                                <h3 class="mt-4">MEN'S JOURNAL</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body text-center py-5">
                                <img loading="lazy" decoding="async" width="162" height="49"
                                    src="images/sema-show-2023-free-unlimited-pngs-with-alpha-channel-transparency.png"
                                    class="img-fluid" alt="" />
                                <img loading="lazy" decoding="async" width="330" height="3"
                                    src="images/Rectangle-10-copy-1.png" class="mt-4 img-fluid" alt=""
                                    srcset="
                      images/Rectangle-10-copy-1.png       330w,
                      images/Rectangle-10-copy-1-300x3.png 300w
                    "
                                    sizes="(max-width: 330px) 100vw, 330px" />
                                <h3 class="mt-4">SEMA PARTNER</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
                                                                                  |--------------------------------------------------------------------------
                                                                                  | Section 22
                                                                                  |--------------------------------------------------------------------------
                                                                                  -->
        <div class="section-15-bg section-22-bg"></div>
        <section class="section-15 section-22">
            <div class="section-container">
                <h4 class="header-title-small text-light">
                    FREQUENTLY ASKED QUESTIONS
                </h4>
                <hr class="hr-light" />
                <h2 class="header-title text-white">QUESTIONS</h2>
                <div class="row gap-3">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="image-area">
                            <img src="images/Group-32.png" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="accordion" id="iconRocklearAccordion">
                            <!-- Accordion item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>
                                            <img width="40" height="44" src="images/q-icon.png" alt="" />
                                        </span>
                                        Is Icon Rocklear a Ceramic Coating?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#iconRocklearAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            No. Ceramic coatings were developed in the early 2000s
                                            and have pretty much remained the same since. Relying on
                                            mostly water beading and easier to cleanse vehicles.
                                            Icon Rocklear was originally engineered in 2016 and has
                                            been advanced several times with the most recent
                                            formulation in 2023. Designed for protection,
                                            brilliance, and ease of cleaning.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>
                                            <img width="40" height="44" src="images/q-icon.png" alt="" />
                                        </span>
                                        What is Icon Rocklear?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#iconRocklearAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Icon Rocklear was forged by blending higher tensile,
                                            brilliance, and volume materials from the industries of
                                            Aviation, Automotive, and Marine making it a truly
                                            remarkable marvel for all surface protection.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span>
                                            <img width="40" height="44" src="images/q-icon.png" alt="" />
                                        </span>
                                        Can you put other materials on top of Icon Rocklear?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#iconRocklearAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Unlike Ceramic Coatings, Icon Rocklear‘s construction
                                            allows for the addition of wraps, vinyl, PPF, and can
                                            actually be refinished over. Making it versatile to a
                                            customers needs without ever losing your installation
                                            investment. &nbsp;See your Icon Rocklear application
                                            facilities for details.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span>
                                            <img width="40" height="44" src="images/q-icon.png" alt="" />
                                        </span>
                                        How long can I expect my Icon Rocklear system to last?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#iconRocklearAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            A bonafide 15 years under normal conditions is standard.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="js/ep-marquee.min.js"></script>


    <script>
        function initComparisons() {
            var slider = document.querySelector(".img-comp-slider");
            var img = document.querySelector(".img-comp-overlay");
            var clicked = 0;
            var width = img.offsetWidth;

            // Set the slider's initial position to the far right
            slider.style.left = (width - (slider.offsetWidth / 2)) + "px";
            img.style.width = width + "px"; // Set initial overlay width to full width

            // Event listeners for mouse
            slider.addEventListener("mousedown", startSlide);
            window.addEventListener("mouseup", stopSlide);

            // Event listeners for touch
            slider.addEventListener("touchstart", startSlide);
            window.addEventListener("touchend", stopSlide);

            function startSlide(e) {
                e.preventDefault(); // Prevent default touch event
                clicked = 1;
                window.addEventListener("mousemove", slideMove);
                window.addEventListener("touchmove", slideMove);
            }

            function stopSlide() {
                clicked = 0;
                window.removeEventListener("mousemove", slideMove);
                window.removeEventListener("touchmove", slideMove);
            }

            function slideMove(e) {
                if (clicked === 0) return;
                var pos = getCursorPos(e);
                if (pos < 0) pos = 0;
                if (pos > width) pos = width;
                slide(pos);
            }

            function getCursorPos(e) {
                var a = img.getBoundingClientRect();
                var x = e.pageX || e.touches[0].pageX;
                return x - a.left - window.pageXOffset;
            }

            function slide(x) {
                img.style.width = x + "px";
                slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
            }
        }

        window.onload = initComparisons;
    </script>

    <script>
        /*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/
        // initComparisons();
    </script>

    <script>
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
    </script>

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
@endsection
