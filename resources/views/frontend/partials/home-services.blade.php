<section class="section-area bg-primary service-wraper1 section-sp2"
    style="background-image: url(images/background/bg2.png); background-repeat: no-repeat; background-position:right top;">
    <div class="container">
        <div class="heading-bx text-white d-lg-flex d-md-block align-items-end justify-content-between">
            <div class="clearfix">
                <h6 class="title-ext">@lang("messages.OUR SERVICES")</h6>
                {{-- <h2 class="title mb-0">WE PROVIDE BEST SERVICES</h2> --}}
            </div>
            {{-- <div class="clearfix mt-md-20">
                        <a href="#" class="btn btn-outline-light">View All Service</a>
                    </div> --}}
        </div>
        <div class="row spno">

        @php

            $ceramicCoatingKey = __('CERAMIC COATING');
            $windowTintsKey = __('WINDOW TINTS');
            $paintProtectionFilmKey = __('PAINT PROTECTION FILM');

            $services = [
                $ceramicCoatingKey => [
                    'description' => __('Our advanced ceramic coatings provide a robust layer of protection, along with an exceptional gloss that keeps vehicles looking new.'),
                    'icon' => asset('images/icon/vehicle.png'),
                    'url' => route('frontend.CeramicCoating'),
                ],
                $windowTintsKey => [
                    'description' => __('Beyond aesthetics, our window tinting services offer UV protection, heat reduction, and enhanced privacy.'),
                    'icon' => asset('images/icon/window.png'),
                    'url' => route('frontend.WindowTintSimulator'),
                ],
                $paintProtectionFilmKey => [
                    'description' => __('We offer top-tier PPF solutions to protect against chips, scratches, and environmental damage.'),
                    'icon' => asset('images/icon/protection.png'),
                    'url' => route('frontend.PaintProtectionFilmSimulator'),
                ],
            ];

        @endphp


        @foreach ($services as $key => $service)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="feature-container bg-gray-alt feature-bx1 mb-sm-30">
                    <div class="icon-lg mb-10 text-primary">
                        <img src="{{ $service['icon'] }}" alt="">
                    </div>
                    <div class="icon-content">
                        <h5 class="ttr-tilte">{{ $key }}</h5>
                        <p>{{ $service['description'] }}</p>
                        <a href="{{ $service['url'] }}" class="btn-link">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</section>
