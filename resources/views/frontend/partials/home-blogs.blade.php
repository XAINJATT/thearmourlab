<section class="section-area section-sp2 bg-gray ov-hidden">
    <div class="container">
        <div class="heading-bx text-center">
            <h6 class="title-ext text-primary">Latest BLOGS</h6>
            <h2 class="title mb-0">OUR LATEST NEWS</h2>
            <p>Discover a world of fresh insights and intriguing developments in our latest news section.  Stay informed and inspired with stories that matter, written with a touch of creativity and a commitment to quality journalism</p>
        </div>
        <div class="blog-carousel owl-carousel owl-loaded owl-none owl-drag">
            @foreach ($blogDetails as $blog)
                <div class="item">
                    <div class="blog-card style-1 bg-white shadow">
                        <div class="post-media">
                            <a href="{{ route('frontend.blogDetails', $blog->id) }}"><img
                                    src="{{ $blog->image }}" style="filter: grayscale(1);" alt=""></a>
                        </div>
                        <div class="post-info">
                            <h5 class="post-title"><a
                                    href="{{ route('frontend.blogDetails', $blog->id) }}">{{ $blog->title }}</a>
                            </h5>
                            <div class="post-content">
                                <p class="mb-0">
                                    {{ \Str::limit(html_entity_decode(strip_tags($blog->description)), 150) }}</p>
                            </div>
                            <ul class="post-meta">
                                <li class="author">By <a href="#">{{ $blog->blog_writer_name }}</a></li>
                                <li class="date"><a
                                        href="#">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>