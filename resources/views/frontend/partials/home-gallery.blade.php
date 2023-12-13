<div class="mb-10">
    <!-- Portfolio -->


    @php

        $cermaic_coating_images = [
            'CERAMIC COATING' => [asset('images/cc/AdobeStock_277743016.jpeg'), asset('images/cc/AdobeStock_288497655.jpeg'), asset('images/cc/AdobeStock_309914413.jpeg'), asset('images/cc/AdobeStock_336499334.jpeg'), asset('images/cc/AdobeStock_351348421.jpeg'), asset('images/cc/AdobeStock_352308698.jpeg'), asset('images/cc/AdobeStock_355873441.jpeg'), asset('images/cc/AdobeStock_450260195.jpeg'), asset('images/cc/AdobeStock_515182992.jpeg'), asset('images/cc/Screenshot 2023-12-12 at 8.51.58 AM.png'), asset('images/cc/Screenshot 2023-12-12 at 8.52.03 AM.png'), asset('images/cc/Screenshot 2023-12-12 at 8.52.21 AM.png')],
            'Paint Protection' => [asset('images/ppf/AdobeStock_565702687.jpeg'), asset('images/ppf/AdobeStock_620866541.jpeg'), asset('images/ppf/AdobeStock_662153010.jpeg'), asset('images/ppf/AdobeStock_680417592.jpeg')],
            'Window Tints' => [asset('images/wt/AdobeStock_212378764.jpeg'), asset('images/wt/AdobeStock_212378995.jpeg'), asset('images/wt/AdobeStock_254695811.jpeg'), asset('images/wt/AdobeStock_314911406.jpeg')],
        ];

    @endphp

    <section class="section-area">
        <div class="portfolio-carousel owl-none owl-carousel magnific-image">
            @foreach ($cermaic_coating_images as $key => $images)
                @foreach ($images as $image)
                    <div class="item">
                        <div class="portfolio-box style-1">
                            <div class="media">
                                <img style="height: 300px; object-fit: cover;" lazyloading="true" src="{{ $image }}"
                                    alt="">
                                <div class="portfolio-overlay">
                                    <ul>
                                        {{-- <li><a href="#" class="ttr-icon"><i class="la la-link"></i></a> --}}
                                        </li>
                                        <li><a href="{{ $image }}" class="magnific-anchor ttr-icon"><i
                                                    class="la la-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h5 class="title">
                                    <a href="#">
                                        <i class="flaticon-fuel-1"></i> {{ $key }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </section>

</div>
