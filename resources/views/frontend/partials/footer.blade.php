@if (get_giveaway_status('giveaway'))
    <!-- Footer ==== -->
    <style>
        .fixed-bottom-center {
            position: fixed;
            bottom: 20px;
            /* Adjust as needed */
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
            /* Ensure it's above other elements */
        }
    </style>
    <!-- Button to Open the Modal -->
    <button type="button" style="position:fixed; bottom:0;" class="btn btn-primary fixed-bottom-center"
        data-bs-toggle="modal" data-bs-target="#giveawayModal">
        Enter Giveaway
    </button>

    <script>
        @if (session()->has('success'))
            alert('You have entered a giveaway!');
        @endif
        @if (session()->has('errors'))
            @foreach (session()->get('errors')->all() as $error)
                alert('{{ $error }}');
            @endforeach
        @endif
    </script>

    <!-- The Modal -->
    <div class="modal fade" id="giveawayModal" tabindex="-1" aria-labelledby="giveawayModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="giveawayModalLabel">Giveaway Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle" width="100"
                            src="{{ asset('assets/images/giveaway.png') }}" alt="">
                    </div>
                    <h4 class="text-center">Win Big with Our Exclusive Giveaway!</h4>
                    <p class="text-center">
                        Enter for a chance to win! Just provide your details below. Quick and easy - your big win
                        awaits!
                    </p>
                    <!-- Form inside Modal Body -->
                    <form method="post" action="{{ route('frontend.giveaway.enter') }}" class="form-card"
                        id="giveawayForm">
                        <div class="mb-3 form-group">
                            @csrf
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input name="phone" type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="email" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="giveawayForm">Register</button>
                </div>
            </div>
        </div>
    </div>
@endif


<footer class="footer">
    <div class="footer-info" style="background:#80817d">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="footer-logo">
                        <img src="{{ asset('images/white logo.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 my-3 ">
                    <div class="feature-container left footer-info-bx">
                        <div class="icon-lg">
                            <span class="icon-cell"><img src="{{ asset('images/icon/contact/icon3.png') }}"
                                    alt="" /></span>
                        </div>
                        <div class="icon-content">
                            <p>701 Millway Ave Unit 6 Concord, Ontario L4K3S7 Canada</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 my-3 ">
                    <div class="feature-container left footer-info-bx">
                        <div class="icon-lg">
                            <span class="icon-cell"><img src="{{ asset('images/icon/contact/icon1.png') }}"
                                    alt="" /></span>
                        </div>
                        <div class="icon-content">
                            <p><a class="text-white" href="tel:(416) 675 6853">(416) 675 6853</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 my-3 ">
                    <div class="feature-container left footer-info-bx">
                        <div class="icon-lg">
                            <span class="icon-cell"><img src="{{ asset('images/icon/contact/icon2.png') }}"
                                    alt="" /></span>
                        </div>
                        <div class="icon-content">
                            <p><a class="text-white" href="mailto:info@thearmourlab.com">info@thearmourlab.com</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top bt0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="widget footer_widget">
                        <h5 class="footer-title">The Armour Lab</h5>
                        <p class="mb-20">Elevate your vehicle's resilience with our specialized PPF and Ceramic Coating
                            services. Our expert team is dedicated to enhancing and protecting your car's appearance.
                            Expect excellence in every layer of protection.</p>
                        <div class="ft-content">
                            <i class="fa fa-phone"></i>
                            <span>Talk To Our Support</span>
                            <h4><a href="tel:(416) 675 6853">(416) 675 6853</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="widget widget-link-2">
                        <h5 class="footer-title">Our Solutions</h5>
                        <ul>
                            <li><a href="{{ route('frontend.CeramicCoating') }}">Ceramic coating</a></li>
                            <li><a href="{{ route('frontend.PaintProtectionFilmSimulator') }}">Paint protection
                                    film</a>
                            </li>
                            <li><a href="{{ route('frontend.WindowTintSimulator') }}">Window tints</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="widget recent-posts-entry">
                        <h5 class="footer-title">Latest news</h5>
                        <div class="widget-post-bx">
                            @foreach (\App\Helpers\SiteHelper::get_blogs(4) as $blog)
                                <div class="widget-post clearfix">
                                    <div class="ttr-post-media">
                                        <img src="{{ asset($blog->image) }}" alt="">
                                    </div>
                                    <div class="ttr-post-info">
                                        <h6 class="post-title"><a
                                                href="{{ route('frontend.blogDetails', ['id' => $blog->id, 'slug' => \Str::slug($blog->title)]) }}">{{ @$blog->title }}</a>
                                        </h6>
                                        <ul class="post-meta">
                                            <li class="date"><a
                                                    href="{{ route('frontend.blogDetails', ['id' => $blog->id, 'slug' => \Str::slug($blog->title)]) }}"><i
                                                        class="fa fa-calendar"></i>{{ $blog->created_at->format('d M Y') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                    <p class="mb-0">© Copyright TheArmourLab 2023. All right reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-end">
                    <ul class="widget-link">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        {{-- <li><a href="#">About</a></li> --}}
                        <li><a href="{{ route('cart.list') }}">Cart</a></li>
                        <li><a href="{{ route('frontend.shop') }}">Shop</a></li>
                        <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END ==== -->
<button class="back-to-top fa fa-chevron-up"></button>
