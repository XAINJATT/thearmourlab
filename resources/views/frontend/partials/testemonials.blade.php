<section class="section-area section-sp2 bg-gray ovbl-dark testimonial-area"
    style="background-image:url(images/background/bg1.jpg); background-repeat:no-repeat; background-attachment:fixed; background-size:cover;">
    <div class="container">
        <div class="heading-bx text-white d-lg-flex d-md-block align-items-end justify-content-between">
            <div class="clearfix mb-2">
                <h6 class="title-ext text-primary">TESTIMONIAL</h6>
                <h2 class="title mb-0">WHAT CLIENTS SAY</h2>
            </div>
            {{-- <div class="clearfix mt-md-20">
                <a href="javascript:void(0);" class="btn btn-outline-primary">View All Client</a>
            </div> --}}
        </div>
        {{-- <div class="testimonial-carousel-1 owl-carousel owl-btn-1 owl-btn-center-lr dots-style-1 owl-none wow fadeIn"
            data-wow-delay="0.9s">
            @if (App\Helpers\SiteHelper::getTestimonials())
                @foreach (App\Helpers\SiteHelper::getTestimonials() as $testimonial)
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-content">
                                <p>{{ $testimonial->message }}</p>
                            </div>
                            <div class="client-info">
                                <div class="testimonial-info">
                                    <h6 class="name">- {{ $testimonial->name }}</h6>
                                </div>
                                <div class="testimonial-thumb">
                                    <img src="{{ asset('storage/' . $testimonial->profile_picture) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div> --}}

        {{-- <script src="https://widget.trustmary.com/LdAswXUC5"></script> --}}
        <div class="elfsight-app-536b4b55-576e-4d32-a7f1-57d0f8c36d4d" data -elfsight-app-lazy></div>
    </div>
</section>
