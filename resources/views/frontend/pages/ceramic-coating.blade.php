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
                    <h1><span>CERAMIC COATING</span></h1>
                    <!-- Breadcrumb row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                            <li class="breadcrumb-item active" aria-current="page">CERAMIC COATING</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>

        <marquee class="py-3" behavior="" direction="">YEARLY CERAMIC COATING TOP UP BOOSTER PACKAGE STARTING AT $199
        </marquee>

        <section class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <aside class="sticky-top pb-1">
                            <!-- <div class="widget">
                                                    <ul class="service-menu">
                                                        <li><a href="{{ url('automotive') }}"><span>Automotive</span><i
                                                                    class="fa fa-angle-right"></i> </a></li>
                                                        <li><a href="{{ url('/lube_oil') }}"><span>Marine</span><i
                                                                    class="fa fa-angle-right"></i></a></li>
                                                        <li><a href="{{ url('belts') }}"><span>Aviation</span><i
                                                                    class="fa fa-angle-right"></i></a></li>
                                                        <li><a href="{{ url('/air-bag') }}"><span>Residential</span><i
                                                                    class="fa fa-angle-right"></i></a></li>
                                                        <li><a href="{{ url('/break-repair') }}"><span>Industrial</span><i
                                                                    class="fa fa-angle-right"></i></a></li>
                                                    </ul>
                                                </div> -->
                            <div class="widget">
                                {{-- <div class="brochure-bx">
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
                                </div> --}}
                            </div>
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
                                                                class="form-control valid-character"
                                                                placeholder="Your Name">
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
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="ttr-media mb-30">
                                    <img src="images/service-section/pic8.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <h4 class="title mb-10">Discover the Essence of Ceramic Coating at The Armour Lab</h4>
                                <p class="mb-20">
                                    At The Armour Lab, we are delighted to introduce our exclusive range of IGL Ceramic
                                    Coatings, a paradigm of automotive paint protection. Ceramic coating represents a
                                    revolutionary advancement in vehicle care, a transformative treatment that envelops
                                    your car in a resilient, yet exquisite, protective layer.
                                </p>
                                <h4 class="title mb-10">What is Ceramic Coating?</h4>
                                <p class="mb-20">
                                    Ceramic coating is a liquid polymer, distinctively formulated to bond chemically with
                                    your
                                    vehicle’s paint. Once applied, it creates an enduring layer of protection, far
                                    surpassing
                                    conventional wax in both durability and strength. This invisible shield not only
                                    enhances
                                    the paint's gloss but also robustly defends against environmental hazards like UV rays,
                                    acid rains, bird droppings, and road salts
                                </p>
                                {{-- <ul class="list-check-squer mb-30">
                                    <li>Then along come two they</li>
                                    <li>Lorem Ipsum is simply dummy</li>
                                    <li>These eiusmod tempor incididunt</li>
                                </ul> --}}
                            </div>
                        </div>

                        <div class="mb-10">
                            <div class="head-text mb-30">
                                <h4 class="title mb-10">Why Choose The Armour Lab for Your Ceramic Coating Needs?</h4>
                                {{-- <p class="mb-15">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book</p>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book</p> --}}
                            </div>
                            <div class="row mb-30">
                                <div class="col-lg-12">
                                    <ul class="list-check-squer mb-0">
                                        <li><strong>Expert Application:</strong> Precision lies at the heart of our service.
                                            Our skilled
                                            technicians are trained in the art of applying IGL Coatings, ensuring every inch
                                            of
                                            your vehicle is meticulously covered.</li>
                                        <li><strong>Advanced Formulations:</strong> We've handpicked IGL Coatings for their
                                            unparalleled
                                            quality and effectiveness. Their nano-ceramic particles provide superior
                                            protection, maintaining the vibrancy and integrity of your car's paintwork</li>
                                        <li><strong>Long-Lasting Protection:</strong> IGL Coatings are renowned for their
                                            longevity, offering
                                            a persistent, hydrophobic surface that repels water and contaminants, making
                                            cleaning a breeze and keeping your vehicle looking pristine.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="list-check-squer mb-0">
                                        <li><strong>Customized Solutions:</strong> Understanding that each vehicle is
                                            unique, we offer
                                            personalized consultations to determine the best coating approach for your
                                            specific needs and preferences.</li>
                                        <li><strong>Committed Aftercare:</strong> Post-application, we don’t just leave you
                                            to it. We provide
                                            comprehensive guidance on maintaining your coating, ensuring it continues to
                                            protect and shine for years to come.</li>
                                        {{-- <li>Make a type specimen book</li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4>Elevate Your Vehicle with The Armour Lab</h4>
                            <p>Embrace the fusion of science and artistry with The Armour Lab’s IGL Ceramic
                                Coatings. Entrust us with your vehicle, and we promise to transform it into a
                                masterpiece of beauty and resilience. Contact us to begin your journey towards
                                unparalleled automotive protection.</p>
                        </div>

                        <div class="mb-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>IMPROVED RESISTANCE AGAINST MULTIPLE CLIMATES AND CONDITIONS.</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/acid-rain.png') }}"
                                            alt="Acid rain">
                                        <p class="text-center">Acid Rain</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/bird-dropping.png') }}"
                                            alt="Bird droppings">
                                        <p class="text-center">Bird Droppings</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/brake-dust.png') }}"
                                            alt="Brake dust">
                                        <p class="text-center">Brake Dust</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/chemicals-1.png') }}"
                                            alt="Chemicals">
                                        <p class="text-center">Chemicals</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/industrial.png') }}"
                                            alt="Industrial fallout">
                                        <p class="text-center">Industrial Fallout</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/insect-acid.png') }}"
                                            alt="Insect acid">
                                        <p class="text-center">Insect Acid</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/micro-marring.png') }}"
                                            alt="Micro marring">
                                        <p class="text-center">Micro Marring</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/mineral-deposit.png') }}"
                                            alt="Mineral deposits">
                                        <p class="text-center">Mineral Deposits</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/road-grit.png') }}"
                                            alt="Road grit, salt, traffic film & tar">
                                        <p class="text-center">Road Grit, Salt, Traffic Film & Tar</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/rust.png') }}" alt="Rust">
                                        <p class="text-center">Rust</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/sunshine.png') }}"
                                            alt="Sunshine & UV">
                                        <p class="text-center">Sunshine & UV</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cer-card d-flex flex-column align-items-center justify-content-center">
                                        <img class="text-center" src="{{ asset('images/temperature-cycles.png') }}"
                                            alt="Temperature cycles">
                                        <p class="text-center">Temperature Cycles</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mb-5 mt-5 pt-5">
                            <h4>NO OTHER CERAMIC COATING IS BETTER</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-check-squer mb-0">
                                        <li>Easy to clean</li>
                                        <li>Your car looks brand new</li>
                                        <li>Protects your car’s OEM paint</li>
                                        {{-- <li>Make a type specimen book</li> --}}
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-check-squer mb-0">
                                        <li>Up to 10H hardness</li>
                                        <li>100% Protection Warranty*</li>
                                        <li>Creates a very deep, glossy, almost crystal-like finish</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-check-squer mb-0">
                                        <li>Saves time and money</li>
                                        <li>Improves resale value</li>
                                        <li>Eliminates the need for wax</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-check-squer mb-0">
                                        <li>Harmless & Non-hazardous</li>
                                        <li>Low volatile organic compound (VOC)</li>
                                        <li>Better resistance to environmental damage</li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="mb-10">
                    <div class="row mb-10">
                        <div class="wrapper">
                            <div class="car-section-heading">
                                <h1><span>Car Detailing Pricing</span></h1>
                            </div>
                            <div class="tabs-wrapper">
                                <span class="left scroller-btn">
                                    <ul id="scroller" class="nav nav-tabs">
                                        <li class="active mb-3" data-id="regular-size-car"
                                            class="template-state-selected">
                                            <a data-toggle="tab" href="#menu1">
                                                <div>
                                                    <!-- Icon -->
                                                    <div class="car-icon"><img style="width: 80px;"
                                                            src="images/service-section/small-car-icon.png"
                                                            alt="car icon" /></div>
                                                    <!-- Name -->
                                                    <div class="car-label" data-price1="$160"
                                                        data-price2="&lt;span&gt;28% OFF&lt;/span&gt;&lt;s&gt;$319&lt;/s&gt; $230"
                                                        data-price3="$220"
                                                        data-price4="&lt;span&gt;30% OFF&lt;/span&gt;&lt;s&gt;$414&lt;/s&gt; $290"
                                                        data-price5="$260"
                                                        data-price6="&lt;span&gt;32% OFF&lt;/span&gt;&lt;s&gt;$588&lt;/s&gt; $400"
                                                        data-price7="$350"
                                                        data-price8="&lt;span&gt;35% OFF&lt;/span&gt;&lt;s&gt;$877&lt;/s&gt; $570"
                                                        data-time1="1 - 1.5 Hours" data-time2="1.15 - 1.45 Hours"
                                                        data-time3="1.5 - 2 Hours" data-time4="1.45 - 2.15 Hours"
                                                        data-time5="1.5 - 2 hours" data-time6="2.5 - 3 Hours"
                                                        data-time7="2.5 - 3 Hours" data-time8="2.45 - 3.45 Hours">
                                                        Small Car</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" mb-3">
                                            <a data-toggle="tab" href="#menu2">
                                                <div>
                                                    <div class="car-icon"><img style="width: 80px;"
                                                            src="images/service-section/large-sedan-icon.png"
                                                            alt="car icon" /></div>
                                                    <div class="car-label" data-price1="$180"
                                                        data-price2="&lt;span&gt;28% OFF&lt;/span&gt;&lt;s&gt;$347&lt;/s&gt; $250"
                                                        data-price3="$240"
                                                        data-price4="&lt;span&gt;30% OFF&lt;/span&gt;&lt;s&gt;$450&lt;/s&gt; $315"
                                                        data-price5="$280"
                                                        data-price6="&lt;span&gt;32% OFF&lt;/span&gt;&lt;s&gt;$610&lt;/s&gt; $415"
                                                        data-price7="$375"
                                                        data-price8="&lt;span&gt;35% OFF&lt;/span&gt;&lt;s&gt;$900&lt;/s&gt; $585"
                                                        data-time1="1.15 - 2 Hours" data-time2="1.5 - 2 Hours"
                                                        data-time3="1.45 - 2.15 Hours" data-time4="1.45 - 2.5 Hours"
                                                        data-time5="1.45 - 2.15 Hours" data-time6="2.5 - 3 Hours"
                                                        data-time7="2.45 - 3.15 Hours" data-time8="2.45 - 3.45 Hours">
                                                        Sedan</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" mb-3">
                                            <a data-toggle="tab" href="#menu3">
                                                <div>
                                                    <div class="car-icon"><img style="width: 80px;"
                                                            src="images/service-section/large-SUV-icon.png"
                                                            alt="car icon" /></div>
                                                    <div class="car-label" data-price1="$220"
                                                        data-price2="&lt;span&gt;28% OFF&lt;/span&gt;&lt;s&gt;$377&lt;/s&gt; $275"
                                                        data-price3="$280"
                                                        data-price4="&lt;span&gt;30% OFF&lt;/span&gt;&lt;s&gt;$493&lt;/s&gt; $345"
                                                        data-price5="$300"
                                                        data-price6="&lt;span&gt;32% OFF&lt;/span&gt;&lt;s&gt;$632&lt;/s&gt; $430"
                                                        data-price7="$390"
                                                        data-price8="&lt;span&gt;35% OFF&lt;/span&gt;&lt;s&gt;$923&lt;/s&gt; $600"
                                                        data-time1="1.5 - 2 Hours" data-time2="1.45 - 2.15 Hours"
                                                        data-time3="2.20 - 2.45 Hours" data-time4="2 - 3 Hours"
                                                        data-time5="2 - 2.5 Hours" data-time6="2.5 - 3 Hours"
                                                        data-time7="2.45 - 3.5 Hours" data-time8="3 - 4.15 Hours">
                                                        Large SUV</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" mb-3">
                                            <a data-toggle="tab" href="#menu4">
                                                <div>
                                                    <div class="car-icon"><img style="width: 80px;"
                                                            src="images/service-section/semi-truck-icon.png"
                                                            alt="car icon" /></div>
                                                    <div class="car-label" data-price1="$220"
                                                        data-price2="&lt;span&gt;28% OFF&lt;/span&gt;&lt;s&gt;$377&lt;/s&gt; $275"
                                                        data-price3="$280"
                                                        data-price4="&lt;span&gt;30% OFF&lt;/span&gt;&lt;s&gt;$493&lt;/s&gt; $345"
                                                        data-price5="$300"
                                                        data-price6="&lt;span&gt;32% OFF&lt;/span&gt;&lt;s&gt;$632&lt;/s&gt; $430"
                                                        data-price7="$390"
                                                        data-price8="&lt;span&gt;35% OFF&lt;/span&gt;&lt;s&gt;$923&lt;/s&gt; $600"
                                                        data-time1="1.5 - 2. Hours" data-time2="1.45 - 2.15 Hours"
                                                        data-time3="2 - 2.5 Hours" data-time4="2 - 3 Hours"
                                                        data-time5="2 - 2.5 Hours" data-time6="2.45 - 3.15 Hours"
                                                        data-time7="2.45 - 3.5 Hours" data-time8="3 - 4.15 Hours">
                                                        Minivan</div>
                                                </div>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </span>
                            </div>
                            <div class="tab-content">
                                <div id="menu1" class="tab-pane fade in active show">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <!-- Grid row -->
                                            <div class="row">
                                                @include('frontend.partials.ceramic-coating-table-small-car')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <!-- Grid row -->
                                            <div class="row">
                                                @include('frontend.partials.ceramic-coating-table-sedan')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <!-- Grid row -->
                                            <div class="row">
                                                @include('frontend.partials.ceramic-coating-table-large-suv')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <!-- Grid row -->
                                            <div class="row">
                                                @include('frontend.partials.ceramic-coating-table-minivan')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu5" class="tab-pane fade">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <!-- Grid row -->
                                            <div class="row">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <td style="width:80px">PACKAGES</td>
                                                            <td style="width:80px">INTERIOR DETAILING</td>
                                                            <td style="width:80px">INTERIOR DETAILING PRO</td>
                                                            <td style="width:100px">SHOWROOM (INTERIOR & EXTERIOR)
                                                            </td>
                                                            <td style="width:80px">EXTERIOR DETAILING</td>
                                                            <td style="width:80px">EXTERIOR DETAILING PRO</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Prices</td>
                                                            <td>$240</td>
                                                            <td>$310</td>
                                                            <td>$320</td>
                                                            <td>$350</td>
                                                            <td>$330</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estimated Time</td>
                                                            <td> 1 - 1.5 Hours</td>
                                                            <td>1.15 - 1.45 Hours</td>
                                                            <td>1.5 - 2<br> Hours</td>
                                                            <td>1.45 - 2.15 Hours</td>
                                                            <td>1.5 - 2 hours </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Complete exterior handwash with World's Best Spray
                                                                Wax</td>
                                                            <td class="text-center">No</td>
                                                            <td class="text-center">No</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Interior vacuum, cleaning & dusting, also includes
                                                                trunk vacuum & shampoo</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Book Now</td>
                                                            <td>
                                                                <button class="btn btn-primary">Book</button>
                                                            </td>
                                                            <td><button class="btn btn-primary">Book</button></td>
                                                            <td><button class="btn btn-primary">Book</button></td>
                                                            <td><button class="btn btn-primary">Book</button></td>
                                                            <td><button class="btn btn-primary">Book</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu6" class="tab-pane fade">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <!-- Grid row -->
                                            <div class="row">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <td style="width:80px">PACKAGES</td>
                                                            <td style="width:80px">INTERIOR DETAILING</td>
                                                            <td style="width:80px">INTERIOR DETAILING PRO</td>
                                                            <td style="width:100px">SHOWROOM (INTERIOR & EXTERIOR)
                                                            </td>
                                                            <td style="width:80px">EXTERIOR DETAILING</td>
                                                            <td style="width:80px">EXTERIOR DETAILING PRO</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Prices</td>
                                                            <td>$260</td>
                                                            <td>$330</td>
                                                            <td>$320</td>
                                                            <td>$390</td>
                                                            <td>$360</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estimated Time</td>
                                                            <td> 1 - 1.5 Hours</td>
                                                            <td>1.15 - 1.45 Hours</td>
                                                            <td>1.5 - 2<br> Hours</td>
                                                            <td>1.45 - 2.15 Hours</td>
                                                            <td>1.5 - 2 hours </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Complete exterior handwash with World's Best Spray
                                                                Wax</td>
                                                            <td class="text-center">No</td>
                                                            <td class="text-center">No</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Interior vacuum, cleaning & dusting, also includes
                                                                trunk vacuum & shampoo</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                            <td class="text-center">Yes</td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td>Book Now</td>
                                                            <td>
                                                                <button class="btn btn-primary">Book</button>
                                                            </td>
                                                            <td><button class="btn btn-primary">Book</button></td>
                                                            <td><button class="btn btn-primary">Book</button></td>
                                                            <td><button class="btn btn-primary">Book</button></td>
                                                            <td><button class="btn btn-primary">Book</button></td>
                                                        </tr> --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- jQuery library -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                    <!-- Latest compiled JavaScript -->
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


                </div>

            </div>
        </section>
    </div>
@endsection

@section('scripts')
@endsection
