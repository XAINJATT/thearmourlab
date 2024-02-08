@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
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
                                <h6 class="sub-title" data-swiper-parallax="-200">@lang('messages.Welcome to The Armour Lab')</h6>
                                <h2 class="title" data-swiper-parallax="-400">@lang('messages.Your Premier Destination for PPF and Ceramic Coatings')</h2>
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

        <!-- About US -->
        <section class="section-area section-sp1 bg-white"
            style="background-image: url(images/background/bg1.png); background-repeat:no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-40">
                        <div class="heading-bx mb-4">
                            <h6 class="title-ext text-primary">@lang('messages.about Us')</h6>
                            <h2 class="title">@lang('messages.EXPERTS IN AUTOMOTIVE PAINT PROTECTION & CERAMIC COATINGS')</h2>
                            <p>@lang('messages.At The Armour Lab, we are not just about detailing cars; we are about preserving perfection')</p>
                        </div>
                        <a href="{{route('frontend.about')}}" class="btn btn-primary">@lang('messages.about Us')</a>
                    </div>
                    <div class="col-lg-7 mb-30">
                        <div class="about-media">
                            <div class="media">
                                <img src="images/male-worker-wrapping-car-with-ptotective-foil.jpg" alt="">
                            </div>
                            <div class="about-contact bg-primary text-white">
                                <span>@lang("messages.Ready to elevate your vehicle's resilience and radiance?")</span>
                                <br>
                                <h3 class="number mb-15 text-white"><a class="text-white" href="tel:(416) 675 6853">(416)
                                        675 6853</a> </h3>
                                <p class="mb-20"> @lang("messages.Connect with our specialists or Book An Appointment for a consultation. Trust in The Armour Lab to add an invisible armour to your prized possession.")</p>
                                <a href="{{ route('frontend.contact') }}" class="btn btn-light">@lang('messages.BOOK AN APPOINTMENT')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        @include("frontend.partials.home-services")
        

        <!-- Why Choose us -->
       
        @include("frontend.partials.why-choose-us")
        
        <!-- Portfolio -->
        @include("frontend.partials.home-gallery")
        
        
        <!-- Appointment Form -->
        @include("frontend.partials.home-contact")
        
        
        
        <!-- Testimonial -->
        @include('frontend.partials.testemonials')
        
        
        <!-- Blog -->
        @include("frontend.partials.home-blogs", ['blogDetails' => $blogDetails])
      

    </div>
@endsection

@section('scripts')
@endsection
