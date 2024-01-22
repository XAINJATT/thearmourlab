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
        @if (!$products)
            <section class="h-100" style="background-color: #eee;">
                <div class="h-100 py-5">
                    <!-- Shop Start -->
                    <div class="container">
                        <div class="row">
                            <!-- Shop Product Start -->

                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                                    <div class="product-item bg-light mb-4">
                                        <div class="product-img position-relative overflow-hidden">
                                            <img class="img-fluid w-100" src="{{ asset("storage/products/$product->product_image") }}" alt="">
                                            <div class="product-action">
                                                <!-- Add any product action buttons or links here -->
                                            </div>
                                        </div>
                                        <div class="text-center py-4">
                                            <a class="h6 text-decoration-none text-truncate"
                                                href="{{ route('frontend.shop.productDetails', $product->slug) }}">{{ $product->name }}</a>
                                            <div class="d-flex align-items-center justify-content-center mt-2">
                                                @if ($product->discounted_price)
                                                    <h5>${{ $product->discounted_price }}</h5>
                                                @endif
                                                @if ($product->price)
                                                    <h6 class="text-muted ml-2"><del>${{ $product->price }}</del></h6>
                                                @endif
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center mb-1">
                                                <!-- Average star rating -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Shop Product End -->
                        </div>
                        <div class="col-lg-12">
                            {{ $products->links() }}
                        </div>
                    </div>
                    </form>
                    <!-- Shop End -->

                </div>
            </section>
        @else
            <style>
                .cover {
                    width: 100%;
                    height: 100vh;
                    background-color: #ddd;
                    color: #000;
                    text-align: center;
                }

                h1 {
                    font-size: 70px;
                    padding-top: 18%;
                }

                h3 {
                    font-size: 35px;
                }
                .page-banner{
                    padding-bottom: 50px;
                }
            </style>

            <div class="cover">
                <h1>Something Big<br>Is happening </h1>
                <br>
                <h3>Stay Tuned</h3>
            </div>
        @endif

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
