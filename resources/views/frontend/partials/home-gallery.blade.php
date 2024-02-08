<div class="mb-10">
    <!-- Portfolio -->

    @php

        $ceramicCoatingKey = __('CERAMIC COATING');
        $windowTintsKey = __('WINDOW TINTS');
        $paintProtectionFilmKey = __('PAINT PROTECTION FILM');

        $cermaic_coating_images = [
            $ceramicCoatingKey => [
                'images' => [App\Helpers\SiteHelper::get_wt_media()->toArray()],
                'url' => route('frontend.CeramicCoating'),
            ],
            $windowTintsKey => [
                'images' => [App\Helpers\SiteHelper::get_wt_media()],
                'url' => route('frontend.PaintProtectionFilmSimulator'),
            ],
            $paintProtectionFilmKey => [
                'images' => [App\Helpers\SiteHelper::get_wt_media()],
                'url' => route('frontend.WindowTintSimulator'),
            ],
        ];

    @endphp





    <div class="section-area section-sp2 bg-white">
        <div class="container">
            <div class="feature-filters filter-style1 text-center">
                <ul class="filters" data-toggle="buttons">
                    <li ata-category="" data-filter="" class="btn active">
                        <input type="radio">
                        <a href="javascript:;"><span>@lang("messages.All Services")</span></a>
                    </li>
                    @foreach (config('app.services') as $key => $service)
                        <li data-category="{{ $key }}"
                            data-filter=".{{ strtolower(str_replace(' ', '-', $service)) }}" class="btn">
                            <input type="radio">
                            <a href="javascript:;"><span>{{ $service }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div id="loader" class="loader" style="display:none;"></div>
            <ul class="row sp5 magnific-image mb-0" id="masonry">

                {{-- @foreach (config('app.services') as $key => $service) --}}
                @include('frontend.partials.gallery_items', [
                    'images' => get_gallery_media()->take(6)->get(),
                ])
                {{-- @endforeach --}}
            </ul>
            <!-- Load More Button -->
            @if (get_gallery_media()->count() >= 6)
                <div class="width-100 mt-5 d-flex align-items-center justify-content-center">
                    <button id="load-more" class="btn btn-primary">@lang("messages.Load More")</button>
                </div>
            @endif
        </div>
    </div>
</div>

</div>
