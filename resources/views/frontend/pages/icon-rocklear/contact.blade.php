<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Icon Rock Lear</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/image-compare-viewer/dist/image-compare-viewer.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/ep-marquee.css') }}" />

    <link rel="stylesheet" href="{{ asset('icon_rocklear/css/style.css?v=11') }}" />
</head>

<body>
    <main>
        <!--
      |--------------------------------------------------------------------------
      | Section 1
      |--------------------------------------------------------------------------
      -->
        <section class="section-1">
            <div class="section-1-container">
                <h2 class="main-title"><span>Icon</span> Rocklear</h2>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="left">
                            <div>
                                <h4 class="secondary-title">
                                    NOT ALL COATINGS ARE CREATED EQUAL
                                </h4>
                                <a class="cta-primary" href="#">
                                    <span>Contact for more details</span>
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
                                                src="{{ asset('images/Layer-4-copy.png') }}"
                                                class="attachment-full size-full" alt=""
                                                srcset="
                            {{ asset('images/Layer-4-copy.png') }}         843w,
                            {{ asset('images/Layer-4-copy-300x209.png') }} 300w,
                            {{ asset('images/Layer-4-copy-768x536.png') }} 768w
                          "
                                                sizes="(max-width: 843px) 100vw, 843px" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img loading="lazy" decoding="async" width="789" height="588"
                                                src="{{ asset('images/Aviations.png') }}"
                                                class="attachment-full size-full" alt=""
                                                srcset="
                            {{ asset('images/Aviations.png') }} 789w,
                            {{ asset('images/Aviations-300x224.png') }} 300w,
                            {{ asset('images/Aviations-768x572.png') }} 768w
                          "
                                                sizes="(max-width: 789px) 100vw, 789px" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img loading="lazy" decoding="async" width="1006" height="646"
                                                src="{{ asset('images/Agriculture-min.png') }}"
                                                class="attachment-full size-full" alt=""
                                                srcset="
                            {{ asset('images/Agriculture-min.png') }} 1006w,
                            {{ asset('images/Agriculture-min-300x193.png') }}  300w,
                            {{ asset('images/Agriculture-min-768x493.png') }}  768w
                          "
                                                sizes="(max-width: 1006px) 100vw, 1006px" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img loading="lazy" decoding="async" width="1019" height="588"
                                                src="{{ asset('images/Trucking-min.png') }}"
                                                class="attachment-full size-full" alt=""
                                                srcset="
                            {{ asset('images/Trucking-min.png') }}         1019w,
                            {{ asset('images/Trucking-min-300x173.png') }}  300w,
                            {{ asset('images/Trucking-min-768x443.png') }}  768w
                          "
                                                sizes="(max-width: 1019px) 100vw, 1019px" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img decoding="async" width="908" height="588"
                                                src="{{ asset('images/Auto-min.png') }}"
                                                class="attachment-full size-full" alt=""
                                                srcset="
                            {{ asset('images/Auto-min.png') }}         908w,
                            {{ asset('images/Auto-min-300x194.png') }} 300w,
                            {{ asset('images/Auto-min-768x497.png') }} 768w
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

        <section class="section-contact-form mb-5">
            <div class="section-container">
                <h3 class="header-title-small">CONTACT US TODAY</h3>
                <hr class="hr-dark" />
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h2 class="header-title">
                            REACH OUT <span class="stroke-black">WE'RE HERE</span><br />
                            TO HELP
                        </h2>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <form method="POST" action="{{ route('icon-rocklear.store') }}" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    @if (session()->has('success-message'))
                                        <div class="alert alert-success">
                                            {{ session('success-message') }}
                                        </div>
                                    @elseif(session()->has('error-message'))
                                        <div class="alert alert-danger">
                                            {{ session('error-message') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Full Name" name="full_name"
                                            id="full_name" />
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" placeholder="Phone Number" name="phone"
                                            id="phone" />
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email Address" name="email"
                                            id="email" />
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Country" name="country" id="country" />
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="State / Province" name="state"
                                            id="state" />
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="City" name="city" id="City" />
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group d-flex">
                                        <label for="INSTALLATION">INSTALLATION</label>
                                        <input value="INSTALLATION" type="radio" name="service_type"
                                            id="service_type_installation" />
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group d-flex">
                                        <label for="LICENSEE">LICENSEE</label>
                                        <input value="LICENSEE" type="radio" name="service_type"
                                            id="service_type_installation" />
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea placeholder="Additional Information" name="additional_information" id="additional_information"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" class="cta-primary text-white"
                                            placeholder="Additional Information" name="submit" id="submit"
                                            value="Submit Now" />
                                    </div>
                                </div>
                            </div>
                        </form>
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
                            <img src="{{ asset('images/Group-32.png') }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="accordion" id="iconRocklearAccordion">
                            <!-- Accordion item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <span>
                                            <img width="40" height="44"
                                                src="{{ asset('images/q-icon.png') }}" alt="" />
                                        </span>
                                        Is Icon Rocklear a Ceramic Coating?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#iconRocklearAccordion">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <span>
                                            <img width="40" height="44"
                                                src="{{ asset('images/q-icon.png') }}" alt="" />
                                        </span>
                                        What is Icon Rocklear?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#iconRocklearAccordion">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <span>
                                            <img width="40" height="44"
                                                src="{{ asset('images/q-icon.png') }}" alt="" />
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        <span>
                                            <img width="40" height="44"
                                                src="{{ asset('images/q-icon.png') }}" alt="" />
                                        </span>
                                        How long can I expect my Icon Rocklear system to last?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#iconRocklearAccordion">
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
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/image-compare-viewer@1.6.2/dist/image-compare-viewer.min.js"></script>

<script>
    /*
|--------------------------------------------------------------------------
| Swipper First 
|--------------------------------------------------------------------------
*/

    var swiper = new Swiper(".swiperFirst", {
        autoplay: {
            delay: 5000,
        },
        loop: true,
        speed: 500,
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 5,
        effect: "carousel",
        breakpoints: {
            767: {
                slidesPerView: 2,
                spaceBetween: 5,
                slidesPerGroup: 1,
            },
            1023: {
                slidesPerView: 1,
                spaceBetween: 5,
                slidesPerGroup: 1,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next-first",
            prevEl: ".swiper-button-prev-first",
        },
        pagination: {
            el: ".swiper-pagination-first",
            type: "fraction",
            clickable: true,
        },

        paginationClickable: true,
        scrollbar: {
            el: ".swiper-scrollbar-first",
            hide: true,
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        // Enable mousewheel control
        mousewheel: true,
    });
</script>

</html>
