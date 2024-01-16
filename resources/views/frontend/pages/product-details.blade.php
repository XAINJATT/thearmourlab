@extends('frontend.layout.app')

@section('title')
    {{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
    {{-- <style>
        img {
            max-width: 100%;
            height: auto;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style-type: none !important;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            color: black;
        }

        input,
        input:focus,
        input:active {
            outline: none;
        }

        button,
        button:active,
        button:focus,
        button:hover {
            outline: none;
        }

        button {
            padding: 0;
            margin: 0;
            background-color: transparent;
            color: #000;
        }

        .mainWrapper {
            position: relative;
            width: 100%;
            min-width: 320px;
            min-height: 1000px;
            padding: 0;
            margin: 0 !important;
            background: radial-gradient(rgb(48, 61, 85), rgb(47, 51, 82));
        }

        .wrappen_block {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .mainBackground {
            width: 100%;
            min-height: 1000px;
            background: url("https://github.com/BlackStar1991/CardProduct/blob/master/app/img/bgRectangl.png?raw=true") left center no-repeat, url("https://github.com/BlackStar1991/CardProduct/blob/master/app/img/bgPhons.png?raw=true") center center no-repeat, url("https://github.com/BlackStar1991/CardProduct/blob/master/app/img/layer-3-copy-2.png?raw=true") center center no-repeat, url("https://github.com/BlackStar1991/CardProduct/blob/master/app/img/mainBg.png?raw=true") center center no-repeat;
        }

        .productCard_block {
            position: relative;
            margin: 190px auto 0;
            max-width: 800px;
            min-height: 600px;
            box-shadow: 0 5px 21px rgba(0, 0, 0, 0.08);
            background-color: #fff;
        }

        /* LEFT SIDE */
        .productCard_leftSide {
            position: relative;
            width: 100%;
            min-height: 600px;
        }

        .productCard_brendBlock {
            width: 100%;
            height: 75px;
            position: absolute;
            top: 0;
            left: 0;
            max-width: 184px;
            max-height: 75px;
            background-color: #272727;
            z-index: 2;
        }

        .productCard_brendBlock__imageBlock {
            display: block;
            height: 100%;
        }

        .productCard_brendBlock__imageBlock img {
            position: absolute;
            display: block;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .sliderBlock {
            position: relative;
            height: 100%;
            margin-left: 70px;
            margin-top: 89px;
            margin-bottom: 46px;
            overflow: hidden;
        }

        .sliderBlock_items {
            position: relative;
            display: block;
            width: 100%;
            height: 403px;
        }

        .sliderBlock_items__itemPhoto {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            z-index: 2;
            transition: opacity 1s;
        }

        .sliderBlock_items__showing {
            opacity: 1;
            z-index: 3;
        }

        .sliderBlock_items:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: url("https://github.com/BlackStar1991/CardProduct/blob/master/app/img/decorElements/DecorRectangle.png") 50% 50% no-repeat;
            opacity: 0.2;
            z-index: 4;
        }

        .sliderBlock_controls {
            width: 100%;
        }

        .sliderBlock_controls__navigatin {
            margin-top: 8px;
            width: 100%;
        }

        .sliderBlock_controls__wrapper {
            margin: 1% auto;
            width: 110px;
            height: 20px;
        }

        .sliderBlock_controls__arrow {
            position: relative;
            width: 24px;
            height: 24px;
            cursor: pointer;
            border: 1px solid #536dfe;
            transition: 300ms all;
            background-color: #0d2660;
            border-radius: 50%;
        }

        .sliderBlock_controls__arrow:hover {
            background-color: #536dfe;
        }

        .sliderBlock_controls__arrow i {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 50%;
            left: 50%;
            margin-left: -50%;
            margin-top: -50%;
            color: #fff;
            transition: 300ms all;
            font-weight: bold;
            text-align: center;
            font-size: 20px;
        }

        .sliderBlock_controls__arrowBackward {
            float: left;
        }

        .sliderBlock_controls__arrowForward {
            float: right;
        }

        .sliderBlock_positionControls {
            display: block;
            width: 100%;
            height: 3px;
            margin: 30px auto 0;
        }

        .sliderBlock_positionControls__paginatorItem {
            float: left;
            width: 18px;
            height: 10px;
            margin-left: 5px;
            background-color: #d7d7d7;
            cursor: pointer;
        }

        .sliderBlock_positionControls__paginatorItem:first-child {
            margin-left: 31%;
        }

        .sliderBlock_positionControls__active {
            background-color: #536dfe;
        }

        /*   RIGHT SIDE */
        .productCard_rightSide {
            position: relative;
            padding-top: 34px;
            padding-left: 27px;
            padding-right: 40px;
            width: 100%;
            min-height: 600px;
        }

        .block_specification {
            float: right;
            margin-top: 8px;
            cursor: pointer;
            color: #536dfe;
            transition: all 0.5s;
        }

        .block_specification__button {
            display: inline-block;
            margin-right: 7px;
            height: 100%;
            font-size: 17px;
            text-transform: uppercase;
            transform: rotate(0);
            transition: transform 0.5s;
            transform-origin: center center;
        }

        .block_specification:hover .block_specification__button__rotate {
            transition: transform 0.5s;
            transform: rotate(1turn);
        }

        .block_specification:hover {
            color: #f1425d;
        }

        .block_specification__text {
            width: 30px;
            height: 11px;
            font-family: "Titillium Web", sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .block_model {
            display: inline-block;
            color: #263238;
            font-size: 12px;
            opacity: 0.9;
        }

        .block_name {
            width: 100%;
            color: #263238;
            font-weight: 400;
            line-height: 35px;
        }

        .block_name__mainName {
            margin: 0;
            padding: 0;
            font-size: 29px;
        }

        .block_name__addName {
            margin: 0;
            padding: 0;
            font-size: 24px;
        }

        .block_product {
            position: relative;
            width: 100%;
        }

        .block_product__advantagesProduct {
            width: 271px;
            height: 41px;
            margin-top: 14px;
            color: #646b6f;
            font-size: 17px;
            line-height: 24px;
        }

        .block_product__link {
            line-height: 23px;
            color: #536dfe;
        }

        .block_informationAboutDevice {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .block_descriptionInformation {
            width: 304px;
            height: 104px;
            margin-top: 10px;
            font-size: 14px;
            font-weight: 400;
            line-height: 23px;
            color: #263238;
        }

        .block_descriptionCharacteristic {
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
            height: 100%;
            z-index: 30;
            transition: left, ease-out, 0.5s;
        }

        .block_descriptionCharacteristic__active {
            left: 0;
        }

        @keyframes moveCharackeristic {
            0% {
                left: 100%;
            }

            100% {
                left: 0;
            }
        }

        .block_specificationInformation_table {
            position: relative;
            height: 90%;
            background-color: #fff;
        }

        .block_specificationInformation_table tr {
            border-collapse: collapse;
            border: 1px solid #000;
        }

        .block_specificationInformation_table th {
            border: 1px solid #000;
            font-weight: bold;
        }

        .block_specificationInformation_table td {
            border-collapse: collapse;
            text-align: center;
            border: 1px solid #000;
        }

        .block_rating {
            width: 100%;
            margin-top: 33px;
        }

        fieldset,
        label {
            margin: 0;
            padding: 0;
        }

        .block_rating__stars {
            border: none;
            float: left;
            width: auto;
            margin: 0;
            padding: 0;
        }

        input[type=checkbox]+label,
        input[type=radio]+label {
            margin: 0;
        }

        .block_rating__stars>input {
            display: none;
        }

        .block_rating__stars>label:before {
            margin: 5px;
            font-size: 15px;
            font-family: "FontAwesome";
            display: inline-block;
            content: "\f005";
        }

        .block_rating__stars>.half:before {
            content: "\f089";
            position: absolute;
        }

        .block_rating__stars>label {
            color: #c9c9c9;
            float: right;
        }

        /***** CSS Magic to Highlight Stars on Hover *****/
        .block_rating__stars>input:checked~label,
        .block_rating__stars:not(:checked)>label:hover,
        .block_rating__stars:not(:checked)>label:hover~label {
            color: #fccf47;
        }

        /* hover previous stars in list */
        .block_rating__stars>input:checked+label:hover,
        .block_rating__stars>input:checked~label:hover,
        .block_rating__stars>label:hover~input:checked~label,
        .block_rating__stars>input:checked~label:hover~label {
            color: #ffed85;
        }

        .block_rating__avarage {
            margin-left: 31px;
            color: #f1425d;
            font-size: 15px;
            line-height: 35px;
        }

        .block_rating__reviews {
            margin-left: 6px;
            color: #656c6f;
            font-size: 13px;
        }

        .block_price {
            margin-top: 29px;
            width: 100%;
        }

        .block_price__currency {
            padding: 0;
            margin: 0;
            vertical-align: top;
            color: #f1425d;
            font-size: 26px;
            font-weight: 600;
        }

        .block_price__shipping {
            padding: 0;
            margin: 0;
            color: #a2a9ad;
            font-size: 12px;
        }

        .radio_button {
            position: absolute;
            opacity: 0;
        }

        .block_goodColor {
            margin-top: 29px;
            width: 100%;
        }

        .block_goodColor__allColors {
            width: 100%;
            margin-top: 14px;
        }

        .block_goodColor__radio {
            display: inline-block;
            width: 21px;
            height: 21px;
            border-radius: 50%;
            margin-left: 10% !important;
            background-color: #e8e6e3;
            cursor: pointer;
        }

        .radio_button:checked+.block_goodColor__radio {
            width: 25px;
            height: 25px;
            box-shadow: 0 0 5px 3px rgba(83, 109, 254, 0.5);
            border: 2px solid #fff;
        }

        .block_goodColor__black {
            background-color: #3c383a;
        }

        .block_goodColor__silver {
            background-color: silver;
        }

        .text_specification {
            padding: 0;
            color: #37474f;
            font-size: 13px;
        }

        .block_quantity {
            position: relative;
            height: 46px;
            margin-top: 45px;
        }

        .block_quantity span {
            display: inline-block;
            float: left;
            margin-top: 15px;
            margin-right: 10px;
        }

        .block_quantity__chooseBlock {
            vertical-align: top;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .block_quantity__number {
            display: inline-block;
            float: left;
            width: 52px;
            height: 46px;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        .block_quantity__number::placeholder {
            color: #403f40;
            font-size: 18px;
            line-height: 35px;
        }

        .block_quantity__button {
            display: inline-block;
            position: relative;
            float: left;
            width: 20px;
            height: 50%;
            margin: 0;
            padding: 0;
            margin-left: 11px;
            font-size: 0;
            cursor: pointer;
        }

        .block_quantity__button:hover,
        .block_quantity__button:focus {
            background-color: transparent;
        }

        .block_quantity__button:hover:before,
        .block_quantity__button:focus:before {
            color: #536dfe;
        }

        .block_quantity__up:before {
            content: "\f106";
            width: 11px;
            height: 6px;
            font-family: "FontAwesome";
            color: #37474f;
            font-size: 18px;
        }

        .block_quantity__down:before {
            content: "\f107";
            width: 11px;
            height: 6px;
            font-family: "FontAwesome";
            color: #37474f;
            font-size: 18px;
        }

        .button.button_addToCard {
            width: 147px;
            height: 46px;
            margin-top: 43px;
            margin-bottom: 0;
            padding: 0;
            color: #fff;
            background-color: #43491A;
            font-size: 17px;
            transition: all 0.3s;
        }

        .button.button_addToCard:hover {
            background-color: #49501f;
        }

        .aboutMe a {
            display: block;
            width: 30%;
            position: fixed;
            bottom: 0.1%;
            left: 20px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 1.5em;
            font-family: "Roboto", sans-serif;
            text-decoration: none;
        }
    </style> --}}

    <style>
        /* body {
                    background-color: #000
                } */

        .card {
            border: none
        }

        .product {
            background-color: #eee
        }

        .brand {
            font-size: 13px
        }

        .act-price {
            color: red;
            font-weight: 700
        }

        .dis-price {
            text-decoration: line-through
        }

        .about {
            font-size: 14px
        }

        .color {
            margin-bottom: 10px
        }

        label.radio {
            cursor: pointer
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio span {
            padding: 2px 9px;
            border: 2px solid #ff0000;
            display: inline-block;
            color: #ff0000;
            border-radius: 3px;
            text-transform: uppercase
        }

        label.radio input:checked+span {
            border-color: #ff0000;
            background-color: #ff0000;
            color: #fff
        }

        .btn-danger {
            background-color: #ff0000 !important;
            border-color: #ff0000 !important
        }

        .btn-danger:hover {
            background-color: #da0606 !important;
            border-color: #da0606 !important
        }

        .btn-danger:focus {
            box-shadow: none
        }

        .cart i {
            margin-right: 10px
        }
    </style>
@endsection

@section('content')
    <div class="page-content bg-white">
        <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="page-banner-entry text-center">
                    <h1><span>PRODUCT DETAILS</span></h1>
                    <!-- Breadcrumb row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                            <li class="breadcrumb-item active" aria-current="page">PRODUCT DETAILS</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>

        <!-- <div class="wrapper">
                            <div class="product-img d-flex">
                                <img src="{{ asset('storage/cart/polish.jpg') }}" height="420" width="327">
                            </div>
                            <div class="product-info">
                                <div class="product-text">
                                    <h1>polish</h1>
                                    <h2>by now</h2>
                                    <p>polish are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
                                </div>
                                <div class="product-price-btn">
                                    <p><span>78</span>$</p>
                                    <button type="button">buy now</button>
                                </div>
                            </div>
                        </div> -->


        <div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images p-3">
                                    <div class="text-center p-4"> <img id="main-image" src="https://i.imgur.com/Dhebu4F.jpg"
                                            width="250" /> </div>
                                    <div class="thumbnail text-center">
                                        <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg"
                                            width="70">
                                        <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg"
                                            width="70">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span
                                                class="ml-1">Back</span> </div> <i
                                            class="fa fa-shopping-cart text-muted"></i>
                                    </div>
                                    <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                        <h5 class="text-uppercase">Men's slim fit t-shirt</h5>
                                        <div class="price d-flex flex-row align-items-center"> <span
                                                class="act-price">$20</span>
                                            <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your
                                        everyday use, you could pair it with a stylish pair of jeans or trousers complete
                                        the look.</p>
                                    {{-- <div class="sizes mt-5">
                                        <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio"
                                                name="size" value="S" checked> <span>S</span> </label> <label
                                            class="radio"> <input type="radio" name="size" value="M">
                                            <span>M</span> </label> <label class="radio"> <input type="radio"
                                                name="size" value="L"> <span>L</span> </label> <label
                                            class="radio"> <input type="radio" name="size" value="XL">
                                            <span>XL</span> </label> <label class="radio"> <input type="radio"
                                                name="size" value="XXL"> <span>XXL</span> </label>
                                    </div> --}}
                                    <div class="cart mt-4 align-items-center"> <button
                                            class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i
                                            class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="column small-centered mb-5">
                    <div class="productCard_block">
                        <div class="row">
                            <div class="col-6">
                                <div class="productCard_leftSide clearfix">

                                    <div class="sliderBlock">
                                        <ul class="sliderBlock_items">
                                            @foreach ($productDetails->ProductImages as $image)
                                                <li class="sliderBlock_items__itemPhoto">
                                                    <img src="{{ $image->image }}" alt="product-image">
                                                </li>
                                            @endforeach
                                            <!-- <li class="sliderBlock_items__itemPhoto sliderBlock_items__showing">
                                                                <img src="{{ asset('storage/cart/polish.jpg') }}" alt="headphones">
                                                            </li>
                                                            <li class="sliderBlock_items__itemPhoto">
                                                                <img src="{{ asset('storage/cart/polish.jpg') }}" alt="headphones">
                                                            </li>
                                                            <li class="sliderBlock_items__itemPhoto">
                                                                <img src="{{ asset('storage/cart/polish.jpg') }}" alt="headphones">
                                                            </li>
                                                            <li class="sliderBlock_items__itemPhoto">
                                                                <img src="{{ asset('storage/cart/polish.jpg') }}" alt="headphones">
                                                            </li>
                                                            <li class="sliderBlock_items__itemPhoto">
                                                                <img src="{{ asset('storage/cart/polish.jpg') }}" alt="headphones">
                                                            </li> -->
                                        </ul>


                                        <div class="sliderBlock_controls">
                                            <div class="sliderBlock_controls__navigatin">
                                                <div class="sliderBlock_controls__wrapper">
                                                    <div
                                                        class="sliderBlock_controls__arrow sliderBlock_controls__arrowBackward">
                                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                    </div>
                                                    <div
                                                        class="sliderBlock_controls__arrow sliderBlock_controls__arrowForward">
                                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="sliderBlock_positionControls">
                                                @foreach ($productDetails->ProductImages as $image)
                                                    <li
                                                        class=" @if ($loop->first) sliderBlock_positionControls__active @endif  sliderBlock_positionControls__paginatorItem">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="productCard_rightSide">

                                    <div class="block_product">
                                        <h2 class="block_name block_name__addName">{{ $productDetails->name }}</h2>

                                        <p class="block_product__advantagesProduct">
                                            {!! $productDetails->description !!}
                                        </p>

                                        <div class="block_informationAboutDevice">

                                            <!-- <div class="block_rating clearfix">
                                                                <fieldset class="block_rating__stars">
                                                                    <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Above average - 3.5 stars"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Average - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>
                                                                <span class="block_rating__avarage">4.25</span>
                                                                <span class="block_rating__reviews">(153 reviews)</span>
                                                            </div> -->
                                            <div class="row ">
                                                <div class="large-6 small-12 column left-align">
                                                    <div class="block_informationAboutDevice">
                                                        <div class="row">
                                                            <div class="large-6 small-12 column left-align">
                                                                <div class="block_price">
                                                                    @if ($productDetails->discounted_price)
                                                                        <p class="block_price__currency"
                                                                            style="display: inline;">
                                                                            ${{ $productDetails->discounted_price }}</p>
                                                                        <del>${{ $productDetails->price }}</del>
                                                                    @else
                                                                        <p class="block_price__currency">
                                                                            ${{ $productDetails->price }}</p>
                                                                    @endif
                                                                </div>
                                                                <form action="{{ route('cart.store') }}" method="POST"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden"
                                                                        value="{{ $productDetails->id }}" name="id">
                                                                    <input type="hidden"
                                                                        value="{{ $productDetails->name }}"
                                                                        name="name">
                                                                    <input type="hidden"
                                                                        value="{{ $productDetails->discounted_price }}"
                                                                        name="price">
                                                                    <input type="hidden"
                                                                        value="{{ $productDetails->product_image }}"
                                                                        name="image">
                                                                    <input type="hidden" value="1" name="quantity">
                                                                    <button type="submit"
                                                                        class="button button_addToCard">
                                                                        Add To Cart
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="block_quantity clearfix">
                                                                        <span class="text_specification">Quantity</span>
                                                                        <div class="block_quantity__chooseBlock">
                                                                            <input class="block_quantity__number" name="quantityNumber" type="text" min="1" value="1">
                                                                            <button class="block_quantity__button block_quantity__up"></button>
                                                                            <button class="block_quantity__button block_quantity__down"></button>
                                                                        </div>
                                                                    </div> -->
                                                </div>
                                                <!-- <div class="large-6 small-12 column end">
                                                                    <div class="block_goodColor">
                                                                        <span class="text_specification">Choose your colors:</span>
                                                                        <div class="block_goodColor__allColors">
                                                                            <input type="radio" name="colorOfItem" class="radio_button" id="radioColor" checked />
                                                                            <label for="radioColor" class="block_goodColor__radio block_goodColor__black"></label>
                                                                            <input type="radio" name="colorOfItem" class="radio_button" id="radioColor2" />
                                                                            <label for="radioColor2" class="block_goodColor__radio block_goodColor__silver"></label>
                                                                        </div>
                                                                    </div>
                                                                    <button class="button button_addToCard">
                                                                        Add to Cart
                                                                    </button>
                                                                </div> -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('scripts')
    <script>
        function change_image(image) {
            var container = document.getElementById("main-image");
            container.src = image.src;
        }
        document.addEventListener("DOMContentLoaded", function(event) {});

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


        window.onload = function() {

            //// SLIDER
            var slider = document.getElementsByClassName("sliderBlock_items");
            var slides = document.getElementsByClassName("sliderBlock_items__itemPhoto");
            var next = document.getElementsByClassName("sliderBlock_controls__arrowForward")[0];
            var previous = document.getElementsByClassName("sliderBlock_controls__arrowBackward")[0];
            var items = document.getElementsByClassName("sliderBlock_positionControls")[0];
            var currentSlideItem = document.getElementsByClassName("sliderBlock_positionControls__paginatorItem");

            var currentSlide = 0;
            var slideInterval = setInterval(nextSlide, 5000); /// Delay time of slides

            function nextSlide() {
                goToSlide(currentSlide + 1);
            }

            function previousSlide() {
                goToSlide(currentSlide - 1);
            }


            function goToSlide(n) {
                slides[currentSlide].className = 'sliderBlock_items__itemPhoto';
                items.children[currentSlide].className = 'sliderBlock_positionControls__paginatorItem';
                currentSlide = (n + slides.length) % slides.length;
                slides[currentSlide].className = 'sliderBlock_items__itemPhoto sliderBlock_items__showing';
                items.children[currentSlide].className =
                    'sliderBlock_positionControls__paginatorItem sliderBlock_positionControls__active';
            }


            next.onclick = function() {
                nextSlide();
            };
            previous.onclick = function() {
                previousSlide();
            };


            function goToSlideAfterPushTheMiniBlock() {
                for (var i = 0; i < currentSlideItem.length; i++) {
                    currentSlideItem[i].onclick = function(i) {
                        var index = Array.prototype.indexOf.call(currentSlideItem, this);
                        goToSlide(index);
                    }
                }
            }

            goToSlideAfterPushTheMiniBlock();

            var buttonFullSpecification = document.getElementsByClassName("block_specification")[0];
            var buttonSpecification = document.getElementsByClassName("block_specification__specificationShow")[0];
            var buttonInformation = document.getElementsByClassName("block_specification__informationShow")[0];

            var blockCharacteristiic = document.querySelector(".block_descriptionCharacteristic");
            var activeCharacteristic = document.querySelector(".block_descriptionCharacteristic__active");


            buttonFullSpecification.onclick = function() {

                console.log("OK");


                buttonSpecification.classList.toggle("hide");
                buttonInformation.classList.toggle("hide");


                blockCharacteristiic.classList.toggle("block_descriptionCharacteristic__active");


            };

            var up = document.getElementsByClassName('block_quantity__up')[0],
                down = document.getElementsByClassName('block_quantity__down')[0],
                input = document.getElementsByClassName('block_quantity__number')[0];

            function getValue() {
                return parseInt(input.value);
            }

            up.onclick = function(event) {
                input.value = getValue() + 1;
            };
            down.onclick = function(event) {
                if (input.value <= 1) {
                    return 1;
                } else {
                    input.value = getValue() - 1;
                }

            }


        };
    </script>
@endsection
