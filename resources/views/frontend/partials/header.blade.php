<!-- Header -->
<header class="header header-transparent rs-nav">
    <!-- Menu Header -->
    <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix ">
            <div class="container clearfix">
                <!-- Website Logo -->
                <div class="menu-logo">
                    <a href="/" class="main-logo"><img src="{{ asset('images/white logo.png') }}" alt=""
                            style="width: 100px; padding: 10px;"></a>
                    <a href="/" class="sticky-logo"><img style="width: 100px; padding: 10px;"
                            src="{{ asset('images/logo.webp') }}" alt=""></a>
                </div>
                <!-- Nav Toggle -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                    data-bs-toggle="collapse" data-bs-target="#menuDropdown" aria-controls="menuDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"><span></span><span></span><span></span></button>
                <!-- Secondary Menu -->
                <div class="secondary-menu" style=" margin-top:15px">
                    <a href="{{ url('/login') }}" class="btn btn-outline-light">
                        @if (auth()->check())
                            Dashboard
                        @else
                            Sign in
                        @endif
                    </a>
                    {{-- <a href="{{ route('frontend.live') }}" class="btn btn-primary ms-3">Track</a> --}}
                    @if (get_giveaway_status())
                        <a href="{{ route('frontend.contest') }}" class="btn btn-primary ms-3">Spin To Win</a>
                    @endif
                </div>
                <!-- Menu Links -->
                <div class="menu-links navbar-collapse collapse justify-content-center" id="menuDropdown">
                    <div class="menu-logo">
                        <a href="/"><img src="{{ asset('images/white logo.png') }}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav" style="justify-content: center; margin-top:15px">
                        <li class="active"> <a href="{{ route('frontend.home') }}"> Home </a> </li>

                        <li>
                            <a href="#">Automotive <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="add-menu-left">
                                    <ul>
                                        <li><a href="{{ route('frontend.CeramicCoating') }}"><span>Ceramic
                                                    coating</span> </a></li>
                                        <li><a href="{{ route('frontend.PaintProtectionFilmSimulator') }}"><span>Paint
                                                    protection film</span></a></li>
                                        <li><a href="{{ route('frontend.WindowTintSimulator') }}"><span>Window
                                                    tints</span></a></li>
                                        <!-- <li><a href="{{ route('frontend.wraps') }}"><span>Wraps</span></a></li> -->
                                        <!-- <li><a href="{{ url('/automotive') }}"><span>Automotive</span></a></li> -->
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class=""> <a href="{{ route('frontend.blog') }}"> Blog </a> </li>
                        <li class=""> <a href="{{ route('frontend.contact') }}"> Contact us </a> </li>
                        <li class=""> <a href="{{ route('frontend.shop') }}"> Shop </a> </li>
                        <li class=""> <a href="{{ route('frontend.financing') }}"> Financing </a> </li>
                        <li class=""> <a href="{{ route('frontend.faq') }}"> FAQs </a> </li>
                        <li class=""> <a href="{{ route('frontend.about') }}"> About </a> </li>
                        <!-- <li class="active"> <a href="{{ route('cart.list') }}"> Cart </a> </li> -->
                        <!-- Add this in your HTML or Blade file -->
                        {{-- <li class="active"> <a href="#"> FAQ </a> </li> --}}
                        {{-- <li>
                            <a href="{{ route('cart.list') }}" class="flex items-center text-white">
                                <i class="fas fa-shopping-cart text-primary" style="font-size: 1.5em;"></i>
                                <span class="badge text-primary border border-primary rounded-circle"
                                    style="padding-bottom: 2px">{{ Cart::getTotalQuantity() }}</span>
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{ route('cart.list') }}" class="flex items-center text-white cta-primary">
                                <img class="img-fluid"
                                    src="{{ asset('images/cropped-android-chrome-512x512-1-192x192.png') }}"
                                    alt="">
                                <span class="" style="padding-bottom: 2px">Icon Rocklear</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="social-media mobile">

                        <li>
                            <a href="{{ url('/login') }}" class="btn btn-outline-light">
                                @if (auth()->check())
                                    Dashboard
                                @else
                                    Sign in
                                @endif
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('frontend.live') }}" class="btn btn-primary ms-3">Track</a>
                        </li> --}}
                        @if (get_giveaway_status())
                            <li>
                                <a href="{{ route('frontend.contest') }}" class="btn btn-primary ms-3">Spin To Win</a>
                            </li>
                        @endif
                    </ul>
                    <div class="menu-close">
                        <i class="ti-close"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header End -->
</header>
<!-- Header End -->

<style>
    .mobile li a {
        height: 40px !important;
        width: auto !important;
        border-radius: 0;
        padding: 8px 10px;
    }

    .my-account {
        width: 100% !important;
    }

    .heading-bx .title:after,
    footer .footer-title:after,
    .page-banner h1 span:before,
    .page-banner .h1 span:before,
    .page-banner h1 span:after,
    .page-banner .h1 span:after {
        display: none !important;
    }

    /* .footer .footer-logo{
        background: #171a1e;
    } */

    .footer-info {
        padding: 0 !important;
    }

    .packages .package-list th {
        text-align: center;
    }

    .menu-links .cta-primary img {
        width: 40px;
    }


    .cta-primary {
        --e-global-color-primary: #cfb728;
        --e-global-color-secondary: #54595f;
        --e-global-color-text: #afafaf;
        --e-global-color-accent: #0d9344;
        font-family: "Montserrat", Sans-serif;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        fill: #ffffff;
        color: #ffffff;
        background-color: transparent;
        background-image: linear-gradient(90deg,
                var(--e-global-color-primary) 2%,
                var(--e-global-color-accent) 0%);
        border-radius: 0px 0px 0px 0px;
        padding: 16px 26px 16px 26px;
        box-shadow: none;
        text-decoration: none;
        display: inline-block;
        line-height: 1;
        text-align: center;
        transition: all 0.3s;
    }

    .cta-primary:hover {
        --e-global-color-primary: #cfb728;
        --e-global-color-secondary: #54595f;
        --e-global-color-text: #afafaf;
        --e-global-color-accent: #0d9344;
        color: var(--e-global-color-secondary);
        background-color: transparent;
        background-image: linear-gradient(90deg,
                var(--e-global-color-accent) 3%,
                #ffffff 0%);
    }

    
    .menu-links .cta-primary {
        max-width: 259px;
        padding: 0px 12px 0px 12px !important;
    margin-top: 14px;
    }

    @media only screen and (max-width: 991px) {
        .rs-nav .social-media {
            margin-top: auto;
            padding: 57px 0;
        }
    }

    @media (min-width: 1200px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
            max-width: 1400px;
        }
    }
</style>
