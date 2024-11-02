@foreach ($images as $image)
    <li
        class="action-card  col-lg-4 col-md-6 col-sm-12 col-12 {{ strtolower(str_replace(' ', '-', config('app.services')[$image->category])) }}">
        <div class="portfolio-box style-2 mb-2">
            <div class="portfolio-media">
                @if (strpos($image->type, 'image') !== false)
                    <img style="height: 300px; object-fit: cover; width:100%" src="{{ Storage::url($image->path) }}"
                        alt="">
                @endif
                {{-- @dd($image->type) --}}
                @if (strpos($image->type, 'video') !== false)
                    <video style="height: 300px; object-fit: cover; width:100%" src="{{ Storage::url($image->path) }}">
                        <source src="{{ $image->path }}">
                    </video>
                @endif
            </div>
            <div class="portfolio-info">
                <h4 class="title"><a
                        href="{{ route(config('app.services_url')[$image->category]) }}">{{ config('app.services')[$image->category] }}</a>
                </h4>
                <span class="exe-title">SERVICES</span>
            </div>
            <a target="_blank" href="{{ Storage::url($image->path) }}" class="magnific-anchor">View Image</a>
        </div>
    </li>
@endforeach
