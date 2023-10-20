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

    <section class="section-area section-sp1">
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
                                    <div class="progress-box style1 appear" data-percent="70%">
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