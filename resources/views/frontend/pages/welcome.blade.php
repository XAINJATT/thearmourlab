@extends('frontend.layout.app')

@section('title')
{{__('THE ARMOUR LAB')}}
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-content bg-white">

        <!-- Main Slider -->
        <div class="ttr-slider style-2">
            <div class="swiper-container ttr-swiper01">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
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
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-img">
                            <img src="images/slider/slide3.jpg" alt=""/>
                        </div>
                        <div class="slider-content container text-center text-white">
                            <div class="content-inner">
                                <h6 class="sub-title" data-swiper-parallax="-200">The Armour Lab</h6>
                                <h2 class="title" data-swiper-parallax="-400">Save in our Hands</h2>
                                <div class="car-wheel wheel2"  data-swiper-parallax="-600">
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
        <section class="section-area section-sp1 bg-white" style="background-image: url(images/background/bg1.png); background-repeat:no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-40">
                        <div class="heading-bx mb-4">
                            <h6 class="title-ext text-primary">about Us</h6>
                            <h2 class="title">WE'RE A COMPANY OF TALENTED ENGINEERS &amp; MECHANICS</h2>
                            <p>With over 10 years of experience in the Automotive industry and 5 years in the Surface Protection industry our team of Armour Lab experts are here to turn your everyday assets into an easy, maintainable and enjoyable investment.</p>
                        </div>
                        <a href="#" class="btn btn-primary">About Us</a>
                    </div>
                    <div class="col-lg-7 mb-30">
                        <div class="about-media">
                            <div class="media">
                                <img src="images/about/pic1.jpg" style="filter: sepia(1);" alt="">
                            </div>
                            <div class="about-contact bg-primary text-white">
                                <h6 class="title-ext text-white">WANT TO TALK?</h6>
                                <h3 class="number mb-15 text-white">(416) 675 6853 </h3>
                                <p class="mb-20">Need a special repair service? we are happy to fulfil every request in order to exceed your expe</p>
                                <a href="#" class="btn btn-light">BOOK AN APPOINTMENT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="section-area bg-primary service-wraper1 section-sp2" style="background-image: url(images/background/bg2.png); background-repeat: no-repeat; background-position:right top;">
            <div class="container">
                <div class="heading-bx text-white d-lg-flex d-md-block align-items-end justify-content-between">
                    <div class="clearfix">
                        <h6 class="title-ext">OUR SERVICES</h6>
                        <h2 class="title mb-0">WE PROVIDE BEST SERVICES</h2>
                    </div>
                    <div class="clearfix mt-md-20">
                        <a href="#" class="btn btn-outline-light">View All Service</a>
                    </div>
                </div>
                <div class="row spno">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-container bg-gray-alt feature-bx1 mb-sm-30">
                            <div class="icon-lg mb-10 text-primary">
                                <i class="flaticon-fuel-1"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">OIL CHANGE</h5>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                <a href="#" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-container feature-bx1 mb-sm-30">
                            <div class="icon-lg mb-10 text-primary">
                                <i class="flaticon-brake"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">BREAK REPAIR</h5>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                <a href="#" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-container bg-gray-alt feature-bx1 mb-sm-30">
                            <div class="icon-lg mb-10 text-primary">
                                <i class="flaticon-car-4"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">CAR WHEELS</h5>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                <a href="#" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-container feature-bx1 mb-sm-30">
                            <div class="icon-lg mb-10 text-primary">
                                <i class="flaticon-check-2"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">GENERAL SERVICE</h5>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                <a href="#" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-container feature-bx1 mb-sm-30">
                            <div class="icon-lg mb-10 text-primary">
                                <i class="flaticon-battery-2"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">CAR BATTERIES</h5>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                <a href="#" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-container bg-gray-alt feature-bx1 mb-sm-30">
                            <div class="icon-lg mb-10 text-primary">
                                <i class="flaticon-paint"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">CAR PAINTING</h5>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                <a href="#" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-container active feature-bx1 mb-sm-30">
                            <div class="icon-lg mb-10 text-primary">
                                <i class="flaticon-repair-1"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">WHEEL CHANGE</h5>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                <a href="#" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-container bg-gray-alt feature-bx1">
                            <div class="icon-lg mb-10 text-primary">
                                <i class="flaticon-engine"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">ENGINE REPAIR</h5>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                                <a href="#" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose us -->
        <section class="section-area bg-white section-sp1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-30">
                        <div class="choose-media">
                            <img src="images/about/pic6.jpg" style="filter: hue-rotate(45deg);" alt=""/>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="heading-bx mb-30">
                            <h6 class="title-ext text-primary">WHY PEOPLE CHOOSE US</h6>
                            <h2 class="title mb-0">WHY CHOOSE US</h2>
                            <p>Our goal is to help every consumer live a hassle free lifestyle. We pay close attention to our customer’s specific requests and deliver above what is expected.</p>
                        </div>
                        <div class="progress-area">
                            <div class="progress-box style1 appear" data-percent="95%">
                                <div class="progress-info">
                                    <h6 class="title">Quality Services</h6>
                                    <h6 class="progress-value">65%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary"></div>
                                </div>
                            </div>
                            <div class="progress-box style1 appear"  data-percent="85%">
                                <div class="progress-info">
                                    <h6 class="title">Experienced Technicials</h6>
                                    <h6 class="progress-value">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-box style1 appear"  data-percent="90%">
                                <div class="progress-info">
                                    <h6 class="title">Long Term Warranty</h6>
                                    <h6 class="progress-value">70%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio -->
        <section class="section-area">
            <div class="portfolio-carousel owl-none owl-carousel magnific-image">
                <div class="item">
                    <div class="portfolio-box style-1">
                        <div class="media">
                            <img src="images/services/pic1.jpg" style="filter: grayscale(1);" alt="">
                            <div class="portfolio-overlay">
                                <ul>
                                    <li><a href="#" class="ttr-icon"><i class="la la-link"></i></a></li>
                                    <li><a href="images/services/pic1.jpg" class="magnific-anchor ttr-icon"><i class="la la-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h5 class="title">
                                <a href="#">
                                    <i class="flaticon-fuel-1"></i> CERAMIC  COATING
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-box style-1">
                        <div class="media">
                            <img src="images/services/pic3.jpg" style="filter: grayscale(1);" alt="">
                            <div class="portfolio-overlay">
                                <ul>
                                    <li><a href="service-lube-oil-and-filters.html" class="ttr-icon"><i class="la la-link"></i></a></li>
                                    <li><a href="images/services/pic3.jpg" class="magnific-anchor ttr-icon"><i class="la la-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h5 class="title"><a href="service-lube-oil-and-filters.html"><i class="flaticon-repair-1"></i> PAINT PROTECTION</a></h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-box style-1">
                        <div class="media">
                            <img src="images/services/pic4.jpg" style="filter: grayscale(1);" alt="">
                            <div class="portfolio-overlay">
                                <ul>
                                    <li><a href="service-belts-and-hoses.html" class="ttr-icon"><i class="la la-link"></i></a></li>
                                    <li><a href="images/services/pic4.jpg" class="magnific-anchor ttr-icon"><i class="la la-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h5 class="title"><a href="service-belts-and-hoses.html"><i class="flaticon-car-4"></i> WINDOW PROTECTION</a></h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-box style-1">
                        <div class="media">
                            <img src="images/services/pic2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <ul>
                                    <li><a href="service-air-conditioning.html" class="ttr-icon"><i class="la la-link"></i></a></li>
                                    <li><a href="images/services/pic2.jpg" class="magnific-anchor ttr-icon"><i class="la la-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h5 class="title"><a href="service-air-conditioning.html"><i class="flaticon-check-2"></i> GENERAL SERVICE</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Appointment Form -->
        <section class="section-area bg-primary form-card">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 align-self-center">
                        <div class="form-head text-white mb-md-30">
                            <h3 class="title">Schedule Service</h3>
                            <h6 class="mb-0"><span class="fw4 me-1">OR Call</span> (416) 675 6853</h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form>
                            <div class="row sp5">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone*">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-select">
                                            <option>Type of Service*</option>
                                            <option>Oil change</option>
                                            <option>Break repair</option>
                                            <option>Car wheels</option>
                                            <option>General service</option>
                                            <option>Car batteries</option>
                                            <option>Car painting</option>
                                            <option>Wheel change</option>
                                            <option>Engine repair</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="How Can We Help you*">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning w-100">SUBMIT REQUEST</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </diV>
        </section>

        <!-- Team -->
        <section class="section-area section-sp1">
            <div class="container">
                <div class="heading-bx text-center">
                    <h6 class="title-ext text-primary">Team Member</h6>
                    <h2 class="title mb-0">OUR TEAM MEMBER</h2>
                    <p>We offer a full range of garage services to vehicle owners located in Ontario area. All mechanic services are performed by highly qualified mechanics.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-member style-1 mb-30">
                            <div class="team-media">
                                <img src="images/team/team1.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <span class="text-primary">CEO & FOUNDER</span>
                                <h4 class="title"><a href="">Michel H. Bohman</a></h4>
                                <ul class="icon-list">
                                    <li><i class="fa fa-phone"></i> (416) 675 6853</li>
                                    <li><i class="fa fa-envelope-o"></i> info@thearmourlab.com</li>
                                </ul>
                                <ul class="social-media">
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-member style-1 mb-30">
                            <div class="team-media">
                                <img src="images/team/team2.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <span class="text-primary">ENGINEER</span>
                                <h4 class="title"><a href="">Sonar Z. Moyna</a></h4>
                                <ul class="icon-list">
                                    <li><i class="fa fa-phone"></i> (416) 675 6853</li>
                                    <li><i class="fa fa-envelope-o"></i> info@thearmourlab.com</li>
                                </ul>
                                <ul class="social-media">
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-member style-1 mb-30">
                            <div class="team-media">
                                <img src="images/team/team3.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <span class="text-primary">WORKER</span>
                                <h4 class="title"><a href="">Kalina GH. Mollika</a></h4>
                                <ul class="icon-list">
                                    <li><i class="fa fa-phone"></i> (416) 675 6853</li>
                                    <li><i class="fa fa-envelope-o"></i> info@thearmourlab.com</li>
                                </ul>
                                <ul class="social-media">
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-member style-1 mb-30">
                            <div class="team-media">
                                <img src="images/team/team4.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <span class="text-primary">HELPER</span>
                                <h4 class="title"><a href="">Falikaz DJ. Pauls</a></h4>
                                <ul class="icon-list">
                                    <li><i class="fa fa-phone"></i> (416) 675 6853</li>
                                    <li><i class="fa fa-envelope-o"></i> info@thearmourlab.com</li>
                                </ul>
                                <ul class="social-media">
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </diV>
        </section>

        <!-- Testimonial -->
        <section class="section-area section-sp2 bg-gray ovbl-dark testimonial-area" style="background-image:url(images/background/bg1.jpg); background-repeat:no-repeat; background-attachment:fixed; background-size:cover;">
            <div class="container">
                <div class="heading-bx text-white d-lg-flex d-md-block align-items-end justify-content-between">
                    <div class="clearfix mb-2">
                        <h6 class="title-ext text-primary">TESTIMONIAL</h6>
                        <h2 class="title mb-0">WHAT CLIENTS SAY</h2>
                    </div>
                    <div class="clearfix mt-md-20">
                        <a href="javascript:void(0);" class="btn btn-outline-primary">View All Client</a>
                    </div>
                </div>
                <div class="testimonial-carousel-1 owl-carousel owl-btn-1 owl-btn-center-lr dots-style-1 owl-none wow fadeIn" data-wow-delay="0.9s">
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit risus at quam hendrerit, quis egestas ligula imperdiet. Cras ultricies massa nec nulla tincidunt, vel viverra lacus ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus odio, pellentesque sed .</p>
                            </div>
                            <div class="client-info">
                                <div class="testimonial-info">
                                    <h6 class="name">- Michel Bohman</h6>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="images/testimonials/pic1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit risus at quam hendrerit, quis egestas ligula imperdiet. Cras ultricies massa nec nulla tincidunt, vel viverra lacus ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus odio, pellentesque sed .</p>
                            </div>
                            <div class="client-info">
                                <div class="testimonial-info">
                                    <h6 class="name">- Sonar Moyna</h6>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="images/testimonials/pic2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit risus at quam hendrerit, quis egestas ligula imperdiet. Cras ultricies massa nec nulla tincidunt, vel viverra lacus ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus odio, pellentesque sed .</p>
                            </div>
                            <div class="client-info">
                                <div class="testimonial-info">
                                    <h6 class="name">- Kalina Mollika</h6>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="images/testimonials/pic3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit risus at quam hendrerit, quis egestas ligula imperdiet. Cras ultricies massa nec nulla tincidunt, vel viverra lacus ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus odio, pellentesque sed .</p>
                            </div>
                            <div class="client-info">
                                <div class="testimonial-info">
                                    <h6 class="name">- Michel Bohman</h6>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="images/testimonials/pic1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit risus at quam hendrerit, quis egestas ligula imperdiet. Cras ultricies massa nec nulla tincidunt, vel viverra lacus ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus odio, pellentesque sed .</p>
                            </div>
                            <div class="client-info">
                                <div class="testimonial-info">
                                    <h6 class="name">- Sonar Moyna</h6>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="images/testimonials/pic2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit risus at quam hendrerit, quis egestas ligula imperdiet. Cras ultricies massa nec nulla tincidunt, vel viverra lacus ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus odio, pellentesque sed .</p>
                            </div>
                            <div class="client-info">
                                <div class="testimonial-info">
                                    <h6 class="name">- Kalina Mollika</h6>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="images/testimonials/pic3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section class="section-area section-sp2 bg-gray ov-hidden">
            <div class="container">
                <div class="heading-bx text-center">
                    <h6 class="title-ext text-primary">Latest BLOGS</h6>
                    <h2 class="title mb-0">OUR LATEST NEWS</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or slightly believable.</p>
                </div>
                <div class="blog-carousel owl-carousel owl-loaded owl-none owl-drag">
                    @foreach($blogDetails as $blog)
                        <div class="item">
                            <div class="blog-card style-1 bg-white shadow">
                                <div class="post-media">
                                    <a href="{{ route('frontend.blogDetails', $blog->id) }}"><img src="{{ $blog->image }}" style="filter: grayscale(1);" alt=""></a>
                                </div>
                                <div class="post-info">
                                    <h5 class="post-title"><a href="{{ route('frontend.blogDetails', $blog->id) }}">{{ $blog->title }}</a></h5>
                                    <div class="post-content">
                                        <p class="mb-0">{{ $blog->description }}</p>
                                    </div>
                                    <ul class="post-meta">
                                        <li class="author"><img src="{{ $blog->blog_writer_picture }}" alt="">By <a href="#">{{ $blog->blog_writer_name }}</a></li>
                                        <li class="date"><a href="#">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
@endsection

@section('scripts')
@endsection
