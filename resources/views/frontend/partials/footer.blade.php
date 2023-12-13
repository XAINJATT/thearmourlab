<!-- Footer ==== -->
<footer class="footer">
    <div class="footer-info bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="footer-logo">
                        <img src="{{ asset('images/white logo.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="feature-container left footer-info-bx">
                        <div class="icon-lg">
                            <span class="icon-cell"><img src="images/icon/contact/icon3.png" alt="" /></span>
                        </div>
                        <div class="icon-content">
                            <p>701 Millway Ave Unit 6 Concord, Ontario L4K3S7 Canada</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="feature-container left footer-info-bx">
                        <div class="icon-lg">
                            <span class="icon-cell"><img src="images/icon/contact/icon1.png" alt="" /></span>
                        </div>
                        <div class="icon-content">
                            <p><a class="text-white"  href="tel:(416) 675 6853">(416) 675 6853</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="feature-container left footer-info-bx">
                        <div class="icon-lg">
                            <span class="icon-cell"><img src="images/icon/contact/icon2.png" alt="" /></span>
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
                        <h5 class="footer-title">Company</h5>
                        <p class="mb-20">Need a special repair service? we are happy to fulfil every request in order
                            to exceed your expectations</p>
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
                            <li><a href="{{ route('frontend.PaintProtectionFilmSimulator') }}">Paint protection film</a></li>
                            <li><a href="{{ route('frontend.WindowTintSimulator') }}">Window tints</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="widget recent-posts-entry">
                        <h5 class="footer-title">Latest news</h5>
                        <div class="widget-post-bx">
                            @foreach(\App\Helpers\SiteHelper::get_blogs() as $blog)
                            <div class="widget-post clearfix">
                                <div class="ttr-post-media">
                                    <img src="{{ asset($blog->image) }}" alt="">
                                </div>
                                <div class="ttr-post-info">
                                    <h6 class="post-title"><a href="{{ route('frontend.blogDetails', $blog->id) }}">{{@$blog->title}}</a></h6>
                                    <ul class="post-meta">
                                        <li class="date"><a href="{{ route('frontend.blogDetails', $blog->id) }}"><i class="fa fa-calendar"></i>{{ $blog->created_at->format('d M Y') }}</a></li>
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
