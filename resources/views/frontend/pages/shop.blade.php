@extends('frontend.layout.app')

@section('title')
{{ __('THE ARMOUR LAB') }}
@endsection

@section('css')

@endsection

@section('content')
<div class="page-content bg-white">
    <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="page-banner-entry text-center">
                <h1><span>SHOP</span></h1>
                <!-- Breadcrumb row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                        <li class="breadcrumb-item active" aria-current="page">SHOP</li>
                    </ul>
                </nav>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>

    <section class="h-100" style="background-color: #eee;">
        <div class="h-100 py-5">
            <!-- Shop Start -->
            <div class="container">
                <div class="row">
                    <!-- Shop Product Start -->
                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                                <div class="product-item bg-light mb-4">
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="{{asset('storage/cart/polish.jpg')}}" alt="">
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate" href="{{ route('frontend.cart') }}">Car Polish</a>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h5>$11850 </h5>
                                            <h6 class="text-muted ml-2"><del>$11850</del></h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mb-1">
                                            <!-- Average star rating -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                                <div class="product-item bg-light mb-4">
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="{{asset('storage/cart/polish.jpg')}}" alt="">
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate" href="{{ route('frontend.cart') }}">Car Polish</a>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h5>$11850 </h5>
                                            <h6 class="text-muted ml-2"><del>$11850</del></h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mb-1">
                                            <!-- Average star rating -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                                <div class="product-item bg-light mb-4">
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="{{asset('storage/cart/polish.jpg')}}" alt="">
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate" href="{{ route('frontend.cart') }}">Car Polish</a>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h5>$11850 </h5>
                                            <h6 class="text-muted ml-2"><del>$11850</del></h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mb-1">
                                            <!-- Average star rating -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                                <div class="product-item bg-light mb-4">
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="{{asset('storage/cart/polish.jpg')}}" alt="">
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate" href="{{ route('frontend.cart') }}">Car Polish</a>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h5>$11850 </h5>
                                            <h6 class="text-muted ml-2"><del>$11850</del></h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mb-1">
                                            <!-- Average star rating -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- Shop Product End -->
                </div>
            </div>
            </form>
            <!-- Shop End -->

        </div>
    </section>

</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const priceCheckboxes = document.querySelectorAll('input[name="price_range[]"]');
        const selectedPriceRangesInput = document.getElementById('selected_price_ranges');

        priceCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const selectedPriceRanges = Array.from(priceCheckboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                selectedPriceRangesInput.value = selectedPriceRanges.join(',');
            });
        });
    });
</script>
@endsection