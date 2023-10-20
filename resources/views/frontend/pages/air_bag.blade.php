@extends('frontend.layout.app')

@section('title')
{{__('THE ARMOUR LAB')}}
@endsection

@section('css')
@endsection

@section('content')
<div class="page-content bg-white">
    <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="page-banner-entry text-center">
                <h1><span>Residential</span></h1>
                <!-- Breadcrumb row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Residential</li>
                    </ul>
                </nav>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>

    <section class="section-area section-sp1" >
        <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <aside class="sticky-top pb-1">
                <div class="widget">
                    <ul class="service-menu">
                        <li><a href="{{url('engine')}}"><span>Engine Diagnostics</span><i class="fa fa-angle-right"></i> </a></li>
                        <li><a href="{{url('/lube_oil')}}"><span>Marine</span><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="{{url('belts')}}"><span>Aviation</span><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="{{url('/air-bag')}}"><span>Residential</span><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="{{url('/break-repair')}}"><span>Industrial</span><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <div class="widget">
                    <div class="brochure-bx">
                        <h5 class="title-head">Download</h5>
                        <a href="javascript:void(0);" class="download-link">
                            <img src="images/icon/pdf.png" alt="">
                            <h5 class="title">Download our Brochures</h5>
                            <span>Download</span>
                        </a>
                        <a href="javascript:void(0);" class="download-link">
                            <img src="images/icon/doc.png" alt="">
                            <h5 class="title">Our Company Details</h5>
                            <span>Download</span>
                        </a>
                    </div>
                </div>
                <div class="widget">
                    <div class="help-bx">
                        <div class="media">
                            <img src="images/about/pic3.jpg" alt=""/>
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
                                h24.9c22.9,0,41.5,18.6,41.5,41.5V274.9z"/>
                            </svg>
                            <h5 class="title mt-20">How Can We Help</h5>
                            <p>If you need any helps, please free to contact us.</p>
                            <a href="contact-1.html" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <div class="col-lg-8 col-md-7">
            <div class="row">
                <div class="col-xl-6">
                    <div class="ttr-media mb-30">
                        <img src="images/service-section/pic3.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <h4 class="title mb-10">SERVICES BENEFITS</h4>
                    <p class="mb-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    <ul class="list-check-squer mb-30">
                        <li>Then along come two they</li>
                        <li>Lorem Ipsum is simply dummy</li>
                        <li>These eiusmod tempor incididunt</li>
                    </ul>
                </div>
            </div>
            <div class="row mb-10">
                <div class="col-xl-3 col-sm-6 col-6">
                    <div class="counter-style-1">
                        <div class="text-secondry">
                            <h2 class="text-primary"><span class="counter">25</span><span>K</span></h2>
                        </div>
                        <h5 class="counter-text">SATISFIED CLIENTS</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-6">
                    <div class="counter-style-1">
                        <div class="text-secondry">
                            <h2 class="text-primary"><span class="counter">35</span><span>+</span></h2>
                        </div>
                        <h5 class="counter-text">WINNING AWARDS</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-6">
                    <div class="counter-style-1">
                        <div class="text-secondry">
                            <h2 class="text-primary"><span class="counter">180</span><span>+</span></h2>
                        </div>
                        <h5 class="counter-text">COMPLETED WORKS</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-6">
                    <div class="counter-style-1">
                        <div class="text-secondry">
                            <h2 class="text-primary"><span class="counter">28</span><span>K</span></h2>
                        </div>
                        <h5 class="counter-text">ENGINE BENEFITS</h5>
                    </div>
                </div>
            </div>
            <div class="mb-10">
                <div class="head-text mb-30">
                    <h4 class="title mb-10">OUR SERVICE</h4>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="progress-area mb-30">
                            <div class="progress-box style1 appear" data-percent="65%">
                                <div class="progress-info">
                                    <h6 class="title">Quality Services</h6>
                                    <h6 class="progress-value">65%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary"></div>
                                </div>
                            </div>
                            <div class="progress-box style1 appear" data-percent="85%">
                                <div class="progress-info">
                                    <h6 class="title">Experienced Technicials</h6>
                                    <h6 class="progress-value">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-box style1 appear"  data-percent="70%">
                                <div class="progress-info">
                                    <h6 class="title">Long Term Warranty</h6>
                                    <h6 class="progress-value">70%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="list-check-squer">
                            <li>Then along come two they</li>
                            <li>Lorem Ipsum is simply dummy</li>
                            <li>That’s just a little bit more than</li>
                            <li>Standard dummy text ever since</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="head-text mb-30">
                <h4 class="title mb-10">COMPLETED WORKS</h4>
                <p class="mb-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
            <div class="row mb-30">
                <div class="col-lg-6">
                    <ul class="list-check-squer mb-0">
                        <li>Then along come two they</li>
                        <li>Lorem Ipsum is simply dummy</li>
                        <li>That’s just a little bit than</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-check-squer mb-0">
                        <li>Standard dummy text ever since</li>
                        <li>Simply dummy text of the printing</li>
                        <li>Make a type specimen book</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
@endsection
