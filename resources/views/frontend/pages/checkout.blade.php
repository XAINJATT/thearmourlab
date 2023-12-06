@extends('frontend.layout.app')

@section('title')
{{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
<style>
    .checkout-row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .col-25 {
        -ms-flex: 25%;
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%;
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%;
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .checkout-container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }

    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .checkout-btn {
        background-color: #43491a;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }

    .checkout-btn:hover {
        background-color: #49501f;
    }

    a {
        color: #2196F3;
    }

    hr {
        border: 1px solid lightgrey;
    }

    span.price {
        float: right;
        color: grey;
    }

    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }

        .col-25 {
            margin-bottom: 20px;
        }
    }
</style>
@endsection

@section('content')
<div class="page-content bg-white">
    <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="page-banner-entry text-center">
                <h1><span>CHECKOUT</span></h1>
                <!-- Breadcrumb row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                        <li class="breadcrumb-item active" aria-current="page">CHECKOUT</li>
                    </ul>
                </nav>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>

    <section class="h-100" style="background-color: #eee;">
        <div class="h-100 py-5">
            <!-- Checkout Start -->
            <div class="container-fluid">
                <form action="{{route('frontend.order.Userstore')}}" id="addDriverForm" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" value="{{ $orderDetails->id }}" name="order_id">
                    <div class="row px-xl-5">
                        <div class="col-lg-8">
                            <div class="bg-light p-30 mb-5">
                                <div class="row" style="padding: 20px;">
                                    <div class="col-md-6 form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="John" name="first_name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" placeholder="Doe" name="last_name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="example@email.com" name="email">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text" placeholder="+123 456 789" name="phone">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Address Line 1</label>
                                        <input class="form-control" type="text" placeholder="123 Street" name="address">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Country</label>
                                        <input class="form-control" type="text" placeholder="USD" name="country">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="New York" name="city">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>State</label>
                                        <input class="form-control" type="text" placeholder="New York" name="state">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" placeholder="123" name="zip_code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="bg-light p-30 mb-5" style="padding: 20px;">
                                <div class="border-bottom">
                                    <h6 class="mb-3">Products</h6>
                                    @foreach ($cartItems as $item)
                                    <div class="d-flex justify-content-between">
                                        <p>{{ $item->name }}</p>
                                        <p>{{ $item->quantity }}</p>
                                        <p>${{ $item->price }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="border-bottom pt-3 pb-2">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6>Subtotal</h6>
                                        <h6 id="subtotal">${{ $orderDetails->subtotal }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="font-weight-medium">Tax (5%)</h6>
                                        <h6 id="tax">${{ $orderDetails->tax }}</h6>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="d-flex justify-content-between mt-2">
                                        <h5>Total</h5>
                                        <h5 id="total">${{ $orderDetails->total }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="bg-light p-30" style="padding: 30px;">
                                    {{-- <form action="">--}}
                                    <input type="hidden" value="12" name="total">
                                    <button class="btn btn-block btn-primary font-weight-bold py-3" style="font-weight: 700 !important; padding-bottom: 1rem !important; padding-top: 1rem !important; display: block; width: 100%;">Place Order</button>
                                    {{-- </form>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Checkout End -->
        </div>
    </section>

</div>
@endsection

@section('scripts')
<script>

</script>

@endsection