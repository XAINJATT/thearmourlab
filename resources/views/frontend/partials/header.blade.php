<!-- Header -->
<header class="header header-transparent rs-nav">
    <!-- Menu Header -->
    <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix ">
            <div class="container clearfix">
                <!-- Website Logo -->
                <div class="menu-logo">
                    <a href="#" class="main-logo"><img src="images/logo.webp" alt="" style="filter: invert(1);"></a>
                    <a href="#" class="sticky-logo"><img src="images/logo.webp" alt=""></a>
                </div>
                <!-- Nav Toggle -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                    data-bs-toggle="collapse" data-bs-target="#menuDropdown" aria-controls="menuDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"><span></span><span></span><span></span></button>
                <!-- Secondary Menu -->
                <div class="secondary-menu">
                    <a href="{{url('/login')}}" class="btn btn-outline-light">Sign in</a>
                    <!-- <a href="#" class="btn btn-primary ms-3">Booking</a> -->
                </div>
                <!-- Menu Links -->
                <div class="menu-links navbar-collapse collapse justify-content-center" id="menuDropdown">
                    <div class="menu-logo">
                        <a href="#"><img src="images/logo.webp" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav" style="justify-content: center;">
                        <li class="active"> <a href="{{ route('frontend.home') }}"> Home </a> </li>

                        <li>
                            <a href="{{url('/automotive')}}">Automotive <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="add-menu-left">
                                    <ul>
                                        <li><a href="{{ route('frontend.CeramicCoating') }}"><span>Ceramic coating</span> </a></li>
                                        <li><a href="#"><span>Paint protection film</span></a></li>
                                        <li><a href="{{ route('frontend.WindowTintSimulator') }}"><span>Window tints</span></a></li>
                                        <li><a href="#"><span>Wraps</span></a></li>
                                        <li><a href="#"><span>Industrial</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="active"> <a href="{{ route('frontend.blog') }}"> Blog </a> </li>
                        <li class="active"> <a href="{{ route('frontend.contact') }}"> contact us </a> </li>
                        <li class="active"> <a href="{{ route('frontend.shop') }}"> Shop </a> </li>
                        <li class="active"> <a href="{{ route('frontend.cart') }}"> Cart </a> </li>
                        <li class="active"> <a href="#"> FAQ </a> </li>

                    </ul>
                    <ul class="social-media">
                        <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
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
