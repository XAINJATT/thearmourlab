<div class="mb-10">
    <!-- Portfolio -->


    @php

        $cermaic_coating_images = [
            'CERAMIC COATING' => [
                'images' => [asset('images/cc/AdobeStock_277743016.jpeg'), asset('images/cc/AdobeStock_288497655.jpeg'), asset('images/cc/AdobeStock_309914413.jpeg'), asset('images/cc/AdobeStock_336499334.jpeg'), asset('images/cc/AdobeStock_351348421.jpeg'), asset('images/cc/AdobeStock_352308698.jpeg'), asset('images/cc/AdobeStock_355873441.jpeg'), asset('images/cc/AdobeStock_450260195.jpeg'), asset('images/cc/AdobeStock_515182992.jpeg'), asset('images/cc/Screenshot 2023-12-12 at 8.51.58 AM.png'), asset('images/cc/Screenshot 2023-12-12 at 8.52.03 AM.png'), asset('images/cc/Screenshot 2023-12-12 at 8.52.21 AM.png')],
                'url' => route('frontend.CeramicCoating'),
            ],
            'Paint Protection' => [
                'images' => [asset('images/ppf/AdobeStock_565702687.jpeg'), asset('images/ppf/AdobeStock_620866541.jpeg'), asset('images/ppf/AdobeStock_662153010.jpeg'), asset('images/ppf/AdobeStock_680417592.jpeg')],
                'url' => route('frontend.PaintProtectionFilmSimulator'),
            ],
            'Window Tints' => [
                'images' => [asset('images/wt/AdobeStock_212378764.jpeg'), asset('images/wt/AdobeStock_212378995.jpeg'), asset('images/wt/AdobeStock_254695811.jpeg'), asset('images/wt/AdobeStock_314911406.jpeg')],
                'url' => route('frontend.WindowTintSimulator'),
            ],
        ];

    @endphp





    <div class="section-area section-sp2 bg-white">
        <div class="container">
            <div class="feature-filters filter-style1 text-center">
                <ul class="filters" data-toggle="buttons">
                    <li data-filter="" class="btn active">
                        <input type="radio">
                        <a href="javascript:;"><span>All Services</span></a>
                    </li>
                    @foreach ($cermaic_coating_images as $key => $images)
                        <li data-filter=".{{ strtolower(str_replace(' ', '-', $key)) }}" class="btn">
                            <input type="radio">
                            <a href="javascript:;"><span>{{ $key }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <ul class="row sp5 magnific-image mb-0" id="masonry">
                @foreach ($cermaic_coating_images as $key => $images)
                    @foreach ($images['images'] as $image)
                        <li
                            class="action-card col-lg-4 col-md-6 col-sm-12 col-12 {{ strtolower(str_replace(' ', '-', $key)) }}">
                            <div class="portfolio-box style-2 mb-2">
                                <div class="portfolio-media">
                                    <img style="height: 300px; object-fit: cover;" src="{{ $image }}"
                                        alt="">
                                </div>
                                <div class="portfolio-info">
                                    <h4 class="title"><a href="{{$images['url'] }}">{{ $key }}</a>
                                    </h4>
                                    <span class="exe-title">SERVICES</span>
                                </div>
                                <a href="{{ $image }}" class="magnific-anchor">View Image</a>
                            </div>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>

</div>
