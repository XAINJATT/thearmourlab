@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-content bg-white">

        <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="page-banner-entry text-center">
                    <h1><span>Frequently Asked Questions</span></h1>
                    <!-- Breadcrumb row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>



        <section class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Tabs for selecting different FAQ categories -->
                        <ul class="nav nav-tabs" id="faqTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="ceramic-coating-tab" data-bs-toggle="tab"
                                    data-bs-target="#ceramicCoating" type="button" role="tab"
                                    aria-controls="ceramicCoating" aria-selected="true">Ceramic Coating FAQ's</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ppf-tab" data-bs-toggle="tab" data-bs-target="#ppf"
                                    type="button" role="tab" aria-controls="ppf" aria-selected="false">PPF
                                    FAQ's</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="window-tint-tab" data-bs-toggle="tab"
                                    data-bs-target="#windowTint" type="button" role="tab" aria-controls="windowTint"
                                    aria-selected="false">Window Tint FAQ's</button>
                            </li>
                        </ul>

                        <!-- Tab content -->
                        <div class="tab-content" id="faqTabContent">
                            @include("frontend.partials.ceramic-coating-faq", ["show" => false])
                            @include("frontend.partials.paint-protection-faq", ["show" => false])
                            @include("frontend.partials.window-tints-faq", ["show" => false])

                           
                           
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <div class="help-bx">
                                <div class="media">
                                    {{-- <img src="images/about/pic3.jpg" alt="" /> --}}
                                </div>
                                <div class="info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 476 476">
                                        <path d="M400.85,181v-18.3c0-43.8-15.5-84.5-43.6-114.7c-28.8-31-68.4-48-111.6-48h-15.1c-43.2,0-82.8,17-111.6,48 c-28.1,30.2-43.6,70.9-43.6,114.7V181c-34.1,2.3-61.2,30.7-61.2,65.4V275c0,36.1,29.4,65.5,65.5,65.5h36.9c6.6,0,12-5.4,12-12
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
                                    <form action="{{ route('frontend.contact.store') }}" id="addDriverForm"
                                        class="contact-form style1" method="post" enctype="multipart/form-data">
                                        @csrf
                                        {{-- <div class="heading-bx mb-4 text-white">
                                                <h6 class="title-ext text-white">Contact Form</h6>
                                                <h3 class="title mb-0">DO YOU HAVE ANY<br /> QUESTIONS</h3>
                                            </div> --}}
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
                                                        <input name="email" type="email" class="form-control"
                                                            required placeholder="Your Email Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class="input-group">
                                                        <input name="phone" type="text" required
                                                            class="form-control int-value" placeholder="Your Phone">
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
                                    </form>
                                </div>
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
