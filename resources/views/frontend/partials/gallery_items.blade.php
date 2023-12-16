@foreach ($images as $image)
    <li
        class="action-card col-lg-4 col-md-6 col-sm-12 col-12 {{ strtolower(str_replace(' ', '-', config('app.services')[$image->category])) }}">
        <div class="portfolio-box style-2 mb-2">
            <div class="portfolio-media">
                <img style="height: 300px; object-fit: cover;" src="{{ Storage::url($image->path) }}" alt="">
            </div>
            <div class="portfolio-info">
                <h4 class="title"><a href="{{ 'Asfd' }}">{{ config('app.services')[$image->category] }}</a>
                </h4>
                <span class="exe-title">SERVICES</span>
            </div>
            <a href="{{ Storage::url($image->path) }}" class="magnific-anchor">View Image</a>
        </div>
    </li>
@endforeach
