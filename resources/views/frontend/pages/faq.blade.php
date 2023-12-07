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
                            <!-- Ceramic Coating FAQs -->
                            <div class="tab-pane fade show active" id="ceramicCoating" role="tabpanel"
                                aria-labelledby="ceramic-coating-tab">


                                <div class="row">
                                    <div class="">
                                        <div class="ttr-accordion style1" id="themeAccordion1">
                                            <div class="card">
                                                <div class="card-header" id="headingOne" data-bs-toggle="collapse"
                                                    role="button" data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fa fa-question-circle"></i>
                                                    What is ceramic coating?
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-bs-parent="#themeAccordion1">
                                                    <div class="card-body">
                                                        Ceramic coating is a liquid polymer applied to a vehicle's exterior
                                                        surfaces. Once cured,

                                                        it bonds with the factory paint, establishing alayer of protection
                                                        anda
                                                        hydrophobic surface.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header collapsed" id="headingTwo" role="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="fa fa-question-circle"></i>
                                                    How long does ceramic coating last?
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-bs-parent="#themeAccordion1">
                                                    <div class="card-body">
                                                        With proper maintenance, premium ceramic coatings can last several
                                                        years.

                                                        The exact duration varies based on environmental conditions, how
                                                        often the
                                                        vehicle is used, and how well it is maintained.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header collapsed" id="headingThree" role="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fa fa-question-circle"></i>
                                                    Does ceramic coating prevent scratches?
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                    data-bs-parent="#themeAccordion1">
                                                    <div class="card-body">
                                                        While ceramic coating provides a protective layer, it isn't entirely
                                                        scratch-proof. However,

                                                        it can minimize light swirls and scratches, adding a level of
                                                        protection
                                                        against minor abrasions.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header collapsed" id="headingFour" role="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    <i class="fa fa-question-circle"></i>
                                                    Can I wash my car regularly after applying a ceramic coating?
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                    data-bs-parent="#themeAccordion1">
                                                    <div class="card-body">
                                                        Yes, regular washing is recommended to remove contaminants. Always
                                                        use a
                                                        PH-neutral soap and avoid abrasive chemicals and touch car washes!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header collapsed" id="headingFive" role="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    <i class="fa fa-question-circle"></i>
                                                    Does ceramic coating require special maintenance?
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                                    data-bs-parent="#themeAccordion1">
                                                    <div class="card-body">
                                                        Ceramic coating warranty primarily addresses manufactures production
                                                        defects
                                                        and any discrepancies during installation. It's essential to
                                                        understand that
                                                        coatings efficacy largely depends on its care. For optimal longevity
                                                        and
                                                        durability, annual maintenance by an approved installer is strongly
                                                        recommended.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- PPF FAQs -->
                            <div class="tab-pane fade" id="ppf" role="tabpanel" aria-labelledby="ppf-tab">
                                <div class="accordion" id="ppfAccordion">



                                    <div class="row">
                                        <div class="">
                                            <div class="ttr-accordion style1" id="themeAccordion2">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne" data-bs-toggle="collapse"
                                                        role="button" data-bs-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <i class="fa fa-question-circle"></i>
                                                        What is Paint Protection Film (PPF)?
                                                    </div>
                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#themeAccordion2">
                                                        <div class="card-body">
                                                            PPF is a transparent, durable film applied to a vehicle's
                                                            exterior to
                                                            protect it from scratches, rock chips, and environmental
                                                            contaminants.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingTwo" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <i class="fa fa-question-circle"></i>
                                                        How does PPF differ from ceramic coating?
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-bs-parent="#themeAccordion2">
                                                        <div class="card-body">
                                                            While both offer protection, PPF is more focused on physical
                                                            protection
                                                            against chips and scratches. Ceramic coating, on the other hand,
                                                            offers
                                                            protection against contaminants, UV damage, and provides a
                                                            hydrophobic
                                                            effect.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingThree" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <i class="fa fa-question-circle"></i>
                                                        Does PPF turn yellow over time?
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-bs-parent="#themeAccordion2">
                                                        <div class="card-body">
                                                            Quality PPFs are designed to resist yellowing. However, over
                                                            extended
                                                            periods and under harsh conditions, some slight discolouration
                                                            might occur.
                                                            Regular maintenance can help prevent this.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingFour" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        <i class="fa fa-question-circle"></i>
                                                        How long does PPF last?
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                        data-bs-parent="#themeAccordion2">
                                                        <div class="card-body">
                                                            Depending on the quality of the film, environmental conditions,
                                                            and
                                                            maintenance, PPF can last several years. Periodic inspections
                                                            are
                                                            recommended to check for signs of wear or damage. Our PPF is
                                                            backed by a 10
                                                            year warranty!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingFive" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        <i class="fa fa-question-circle"></i>
                                                        Is PPF completely resistant to stone chips and scratches?
                                                    </div>
                                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                                        data-bs-parent="#themeAccordion2">
                                                        <div class="card-body">
                                                            Paint Protection Film (PPF) provides an enhanced layer of
                                                            defence against
                                                            stone chips, road debris, and minor abrasions, significantly
                                                            reducing the
                                                            risk of damage to your vehicle's paint. However, it's important
                                                            to note that
                                                            PPF isn't "bulletproof." In cases of high-speed impacts or
                                                            sharp, forceful
                                                            debris, there's still a possibility of stone chips penetrating
                                                            through.Think
                                                            of PPF as a highly effective shield; it will take the brunt of
                                                            many impacts
                                                            and preserve your vehicle's aesthetics, but under extreme
                                                            conditions, no
                                                            shield is absolute.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingSix" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        <i class="fa fa-question-circle"></i>
                                                        Can PPF be removed? Will it damage the paint?
                                                    </div>
                                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                                        data-bs-parent="#themeAccordion2">
                                                        <div class="card-body">
                                                            PPF is designed for safe removal by professionals. When done
                                                            correctly,
                                                            removal will not damage the underlying paint. In fact, the paint
                                                            beneath
                                                            will typically look as vibrant as the day the film was applied.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingSeven" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                        aria-expanded="false" aria-controls="collapseSeven">
                                                        <i class="fa fa-question-circle"></i>
                                                        What is covered under warranty with ppf?
                                                    </div>
                                                    <div id="collapseSeven" class="collapse"
                                                        aria-labelledby="headingSeven" data-bs-parent="#themeAccordion2">
                                                        <div class="card-body">
                                                            PPF's warranty typically covers defects in materials and
                                                            workmanship,
                                                            including yellowing, staining, and cracking. However. it doesn't
                                                            cover
                                                            damages from accidents, misuse. or wear from abrasive

                                                            materials ( stones on the road). Always consult the official
                                                            warranty
                                                            documentation for specific coverage details
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>

                            </div>

                            <!-- Window Tint FAQs -->
                            <div class="tab-pane fade" id="windowTint" role="tabpanel"
                                aria-labelledby="window-tint-tab">
                                <div class="accordion" id="windowTintAccordion">



                                    <div class="row">
                                        <div class="">
                                            <div class="ttr-accordion style1" id="themeAccordion3">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne" data-bs-toggle="collapse"
                                                        role="button" data-bs-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <i class="fa fa-question-circle"></i>
                                                        What makes ceramic window tint different from other types of tints?
                                                    </div>
                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#themeAccordion3">
                                                        <div class="card-body">
                                                            Ceramic window tints use a layer of ceramic particles to reject
                                                            heat and UV
                                                            rays, making them superior in heat reduction without blocking
                                                            electronic
                                                            signals. Unlike other tints, they offer enhanced clarity and are
                                                            less
                                                            reflective, ensuring optimum visibility. Also ceramic film is
                                                            backed by
                                                            LIFETIME warranty!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingTwo" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <i class="fa fa-question-circle"></i>
                                                        Will ceramic tint turn purple or bubble over time?
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-bs-parent="#themeAccordion3">
                                                        <div class="card-body">
                                                            No, high-quality ceramic window tints are designed to be UV
                                                            stable, which
                                                            prevents them from turning purple. The advanced adhesive
                                                            technology ensures
                                                            that the tint remains bubble-free for its lifetime when properly
                                                            installed
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingThree" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <i class="fa fa-question-circle"></i>
                                                        Is ceramic window tint more effective at blocking UV rays than
                                                        regular tint?
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-bs-parent="#themeAccordion3">
                                                        <div class="card-body">
                                                            Absolutely! Ceramic window tints are specifically designed with
                                                            UV-rejecting
                                                            properties. They can block up to 99% of harmful UV rays,
                                                            offering superior
                                                            protection for both vehicle interiors and occupants when
                                                            compared to many
                                                            regular tints.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingFour" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        <i class="fa fa-question-circle"></i>
                                                        Why does ceramic window tint feel cooler than other types of tint
                                                        when
                                                        exposed to sunlight?
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                        data-bs-parent="#themeAccordion3">
                                                        <div class="card-body">
                                                            Ceramic window tints have a high infrared heat rejection rate.
                                                            This means
                                                            they're especially effective at blocking the heat-producing
                                                            infrared rays
                                                            from the sun, ensuring the interior of your vehicle remains
                                                            cooler, even in
                                                            intense sunlight.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingFive" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        <i class="fa fa-question-circle"></i>
                                                        Is 35% the legal window tint limit in Ontario? Can I go darker with
                                                        a 20%
                                                        tint?
                                                    </div>
                                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                                        data-bs-parent="#themeAccordion3">
                                                        <div class="card-body">
                                                            In Ontario, the legal requirement for the front side windows is
                                                            to allow at
                                                            least 70% of light to pass through. However, while 35% tint is
                                                            commonly
                                                            recommended to ensure compliance, many drivers have observed
                                                            that the
                                                            province can be somewhat lenient in its enforcement, with some
                                                            20% tints
                                                            passing inspections. That being said, always proceed with
                                                            caution when
                                                            selecting darker tints, as individual experiences can vary.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" id="headingSix" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        <i class="fa fa-question-circle"></i>
                                                        Can I legally tint my windshield in Ontario?
                                                    </div>
                                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                                        data-bs-parent="#themeAccordion3">
                                                        <div class="card-body">
                                                            Absolutely, you can add a strip of tint to the top part of your
                                                            windshield
                                                            here in Ontario. The law allows a non-reflective tint strip on
                                                            the upper 6
                                                            inches to help shield your eyes from the sun. But remember,
                                                            covering the
                                                            entire windshield isn't allowed – we've got to keep the view
                                                            clear for safe
                                                            driving!
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>




                                    </div>






                                </div>

                            </div>
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
