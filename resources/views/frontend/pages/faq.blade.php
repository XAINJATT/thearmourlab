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
                    <div class="col-md-12">
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
                                <div class="accordion" id="accordionFAQ">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                What is ceramic coating?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                Ceramic coating is a liquid polymer applied to a vehicle's exterior
                                                surfaces. Once cured,

                                                it bonds with the factory paint, establishing alayer of protection anda
                                                hydrophobic surface.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How long does ceramic coating last?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                With proper maintenance, premium ceramic coatings can last several years.

                                                The exact duration varies based on environmental conditions, how often the
                                                vehicle is used, and how well it is maintained.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Does ceramic coating prevent scratches?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                While ceramic coating provides a protective layer, it isn't entirely
                                                scratch-proof. However,

                                                it can minimize light swirls and scratches, adding a level of protection
                                                against minor abrasions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                Can I wash my car regularly after applying a ceramic coating?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                Yes, regular washing is recommended to remove contaminants. Always use a
                                                PH-neutral soap and avoid abrasive chemicals and touch car washes!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFiver">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFiver"
                                                aria-expanded="false" aria-controls="collapseFiver">
                                                Does ceramic coating require special maintenance?
                                            </button>
                                        </h2>
                                        <div id="collapseFiver" class="accordion-collapse collapse"
                                            aria-labelledby="headingFiver" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                Annual inspections and using the right cleaning products will help maintain
                                                its shine

                                                and protection. Avoid using harsh chemicalsor brushes that might damage the
                                                coating.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                                What is warranty that is offered with ceramic coating?
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse"
                                            aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                Ceramic coating warranty primarily addresses manufactures production defects
                                                and any discrepancies during installation. It's essential to understand that
                                                coatings efficacy largely depends on its care. For optimal longevity and
                                                durability, annual maintenance by an approved installer is strongly
                                                recommended.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Continue adding more accordion items for each question -->

                                </div>

                            </div>

                            <!-- PPF FAQs -->
                            <div class="tab-pane fade" id="ppf" role="tabpanel" aria-labelledby="ppf-tab">
                                <div class="accordion" id="ppfAccordion">
                                    <!-- What is Paint Protection Film (PPF)? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPPF1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePPF1"
                                                aria-expanded="false" aria-controls="collapsePPF1">
                                                What is Paint Protection Film (PPF)?
                                            </button>
                                        </h2>
                                        <div id="collapsePPF1" class="accordion-collapse collapse"
                                            aria-labelledby="headingPPF1" data-bs-parent="#ppfAccordion">
                                            <div class="accordion-body">
                                                PPF is a transparent, durable film applied to a vehicle's exterior to
                                                protect it from scratches, rock chips, and environmental contaminants.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- How does PPF differ from ceramic coating? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPPF2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePPF2"
                                                aria-expanded="false" aria-controls="collapsePPF2">
                                                How does PPF differ from ceramic coating?
                                            </button>
                                        </h2>
                                        <div id="collapsePPF2" class="accordion-collapse collapse"
                                            aria-labelledby="headingPPF2" data-bs-parent="#ppfAccordion">
                                            <div class="accordion-body">
                                                While both offer protection, PPF is more focused on physical protection
                                                against chips and scratches. Ceramic coating, on the other hand, offers
                                                protection against contaminants, UV damage, and provides a hydrophobic
                                                effect.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Does PPF turn yellow over time? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPPF3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePPF3"
                                                aria-expanded="false" aria-controls="collapsePPF3">
                                                Does PPF turn yellow over time?
                                            </button>
                                        </h2>
                                        <div id="collapsePPF3" class="accordion-collapse collapse"
                                            aria-labelledby="headingPPF3" data-bs-parent="#ppfAccordion">
                                            <div class="accordion-body">
                                                Quality PPFs are designed to resist yellowing. However, over extended
                                                periods and under harsh conditions, some slight discolouration might occur.
                                                Regular maintenance can help prevent this.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- How long does PPF last? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPPF4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePPF4"
                                                aria-expanded="false" aria-controls="collapsePPF4">
                                                How long does PPF last?
                                            </button>
                                        </h2>
                                        <div id="collapsePPF4" class="accordion-collapse collapse"
                                            aria-labelledby="headingPPF4" data-bs-parent="#ppfAccordion">
                                            <div class="accordion-body">
                                                Depending on the quality of the film, environmental conditions, and
                                                maintenance, PPF can last several years. Periodic inspections are
                                                recommended to check for signs of wear or damage. Our PPF is backed by a 10
                                                year warranty!
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Is PPF completely resistant to stone chips and scratches? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPPF5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePPF5"
                                                aria-expanded="false" aria-controls="collapsePPF5">
                                                Is PPF completely resistant to stone chips and scratches?
                                            </button>
                                        </h2>
                                        <div id="collapsePPF5" class="accordion-collapse collapse"
                                            aria-labelledby="headingPPF5" data-bs-parent="#ppfAccordion">
                                            <div class="accordion-body">
                                                Paint Protection Film (PPF) provides an enhanced layer of defence against
                                                stone chips, road debris, and minor abrasions, significantly reducing the
                                                risk of damage to your vehicle's paint. However, it's important to note that
                                                PPF isn't "bulletproof." In cases of high-speed impacts or sharp, forceful
                                                debris, there's still a possibility of stone chips penetrating through.Think
                                                of PPF as a highly effective shield; it will take the brunt of many impacts
                                                and preserve your vehicle's aesthetics, but under extreme conditions, no
                                                shield is absolute.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Can PPF be removed? Will it damage the paint? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPPF6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePPF6"
                                                aria-expanded="false" aria-controls="collapsePPF6">
                                                Can PPF be removed? Will it damage the paint?
                                            </button>
                                        </h2>
                                        <div id="collapsePPF6" class="accordion-collapse collapse"
                                            aria-labelledby="headingPPF6" data-bs-parent="#ppfAccordion">
                                            <div class="accordion-body">
                                                PPF is designed for safe removal by professionals. When done correctly,
                                                removal will not damage the underlying paint. In fact, the paint beneath
                                                will typically look as vibrant as the day the film was applied.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- What is covered under warranty with ppf? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPPF7">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePPF7"
                                                aria-expanded="false" aria-controls="collapsePPF7">
                                                What is covered under warranty with ppf?
                                            </button>
                                        </h2>
                                        <div id="collapsePPF7" class="accordion-collapse collapse"
                                            aria-labelledby="headingPPF7" data-bs-parent="#ppfAccordion">
                                            <div class="accordion-body">
                                                PPF's warranty typically covers defects in materials and workmanship,
                                                including yellowing, staining, and cracking. However. it doesn't cover
                                                damages from accidents, misuse. or wear from abrasive

                                                materials ( stones on the road). Always consult the official warranty
                                                documentation for specific coverage details
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Window Tint FAQs -->
                            <div class="tab-pane fade" id="windowTint" role="tabpanel"
                                aria-labelledby="window-tint-tab">
                                <div class="accordion" id="windowTintAccordion">
                                    <!-- What makes ceramic window tint different from other types of tints? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingWindowTint1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseWindowTint1"
                                                aria-expanded="false" aria-controls="collapseWindowTint1">
                                                What makes ceramic window tint different from other types of tints?
                                            </button>
                                        </h2>
                                        <div id="collapseWindowTint1" class="accordion-collapse collapse"
                                            aria-labelledby="headingWindowTint1" data-bs-parent="#windowTintAccordion">
                                            <div class="accordion-body">
                                                Ceramic window tints use a layer of ceramic particles to reject heat and UV
                                                rays, making them superior in heat reduction without blocking electronic
                                                signals. Unlike other tints, they offer enhanced clarity and are less
                                                reflective, ensuring optimum visibility. Also ceramic film is backed by
                                                LIFETIME warranty!
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Will ceramic tint turn purple or bubble over time? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingWindowTint2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseWindowTint2"
                                                aria-expanded="false" aria-controls="collapseWindowTint2">
                                                Will ceramic tint turn purple or bubble over time?
                                            </button>
                                        </h2>
                                        <div id="collapseWindowTint2" class="accordion-collapse collapse"
                                            aria-labelledby="headingWindowTint2" data-bs-parent="#windowTintAccordion">
                                            <div class="accordion-body">
                                                No, high-quality ceramic window tints are designed to be UV stable, which
                                                prevents them from turning purple. The advanced adhesive technology ensures
                                                that the tint remains bubble-free for its lifetime when properly installed
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Is ceramic window tint more effective at blocking UV rays than regular tint? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingWindowTint3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseWindowTint3"
                                                aria-expanded="false" aria-controls="collapseWindowTint3">
                                                Is ceramic window tint more effective at blocking UV rays than regular tint?
                                            </button>
                                        </h2>
                                        <div id="collapseWindowTint3" class="accordion-collapse collapse"
                                            aria-labelledby="headingWindowTint3" data-bs-parent="#windowTintAccordion">
                                            <div class="accordion-body">
                                                Absolutely! Ceramic window tints are specifically designed with UV-rejecting
                                                properties. They can block up to 99% of harmful UV rays, offering superior
                                                protection for both vehicle interiors and occupants when compared to many
                                                regular tints.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Why does ceramic window tint feel cooler than other types of tint when exposed to sunlight? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingWindowTint4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseWindowTint4"
                                                aria-expanded="false" aria-controls="collapseWindowTint4">
                                                Why does ceramic window tint feel cooler than other types of tint when
                                                exposed to sunlight?
                                            </button>
                                        </h2>
                                        <div id="collapseWindowTint4" class="accordion-collapse collapse"
                                            aria-labelledby="headingWindowTint4" data-bs-parent="#windowTintAccordion">
                                            <div class="accordion-body">
                                                Ceramic window tints have a high infrared heat rejection rate. This means
                                                they're especially effective at blocking the heat-producing infrared rays
                                                from the sun, ensuring the interior of your vehicle remains cooler, even in
                                                intense sunlight.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Is 35% the legal window tint limit in Ontario? Can I go darker with a 20% tint? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingWindowTint5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseWindowTint5"
                                                aria-expanded="false" aria-controls="collapseWindowTint5">
                                                Is 35% the legal window tint limit in Ontario? Can I go darker with a 20%
                                                tint?
                                            </button>
                                        </h2>
                                        <div id="collapseWindowTint5" class="accordion-collapse collapse"
                                            aria-labelledby="headingWindowTint5" data-bs-parent="#windowTintAccordion">
                                            <div class="accordion-body">
                                                In Ontario, the legal requirement for the front side windows is to allow at
                                                least 70% of light to pass through. However, while 35% tint is commonly
                                                recommended to ensure compliance, many drivers have observed that the
                                                province can be somewhat lenient in its enforcement, with some 20% tints
                                                passing inspections. That being said, always proceed with caution when
                                                selecting darker tints, as individual experiences can vary.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Can I legally tint my windshield in Ontario? -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingWindowTint6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseWindowTint6"
                                                aria-expanded="false" aria-controls="collapseWindowTint6">
                                                Can I legally tint my windshield in Ontario?
                                            </button>
                                        </h2>
                                        <div id="collapseWindowTint6" class="accordion-collapse collapse"
                                            aria-labelledby="headingWindowTint6" data-bs-parent="#windowTintAccordion">
                                            <div class="accordion-body">
                                                Absolutely, you can add a strip of tint to the top part of your windshield
                                                here in Ontario. The law allows a non-reflective tint strip on the upper 6
                                                inches to help shield your eyes from the sun. But remember, covering the
                                                entire windshield isn't allowed – we've got to keep the view clear for safe
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
        </section>
    </div>
@endsection

@section('scripts')
@endsection
