@extends('frontend.layout.app')

@section('title')
{{ __('THE ARMOUR LAB') }}
@endsection

@section('css')
<style>
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
            <img src="{{asset('storage/cart/polish.jpg')}}" height="420" width="327">
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

    <div class="container">
        <div class="row">
            <div class="column small-centered mb-5">
                <div class="productCard_block">
                    <div class="row">
                        <div class="col-6">
                            <div class="productCard_leftSide clearfix">

                                <div class="sliderBlock">
                                    <ul class="sliderBlock_items">
                                        <li class="sliderBlock_items__itemPhoto sliderBlock_items__showing">
                                            <img src="{{asset('storage/cart/polish.jpg')}}" alt="headphones">
                                        </li>
                                        <li class="sliderBlock_items__itemPhoto">
                                            <img src="{{asset('storage/cart/polish.jpg')}}" alt="headphones">
                                        </li>
                                        <li class="sliderBlock_items__itemPhoto">
                                            <img src="{{asset('storage/cart/polish.jpg')}}" alt="headphones">
                                        </li>
                                        <li class="sliderBlock_items__itemPhoto">
                                            <img src="{{asset('storage/cart/polish.jpg')}}" alt="headphones">
                                        </li>
                                        <li class="sliderBlock_items__itemPhoto">
                                            <img src="{{asset('storage/cart/polish.jpg')}}" alt="headphones">
                                        </li>
                                    </ul>


                                    <div class="sliderBlock_controls">
                                        <div class="sliderBlock_controls__navigatin">
                                            <div class="sliderBlock_controls__wrapper">
                                                <div class="sliderBlock_controls__arrow sliderBlock_controls__arrowBackward">
                                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                </div>
                                                <div class="sliderBlock_controls__arrow sliderBlock_controls__arrowForward">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="sliderBlock_positionControls">
                                            <li class="sliderBlock_positionControls__paginatorItem sliderBlock_positionControls__active"></li>
                                            <li class="sliderBlock_positionControls__paginatorItem"></li>
                                            <li class="sliderBlock_positionControls__paginatorItem"></li>
                                            <li class="sliderBlock_positionControls__paginatorItem"></li>
                                            <li class="sliderBlock_positionControls__paginatorItem"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="productCard_rightSide">

                                <p class="block_model">
                                    <span class="block_model__text">Model: </span>
                                    <span class="block_model__number">505795</span>
                                </p>

                                <div class="block_product">
                                    <h2 class="block_name block_name__mainName">MOMENTUM<sup>&reg; </sup></h2>
                                    <h2 class="block_name block_name__addName">Wireless Black</h2>

                                    <p class="block_product__advantagesProduct">
                                        Wireless headphones with integrated microphone
                                    </p>

                                    <div class="block_informationAboutDevice">

                                        <div class="block_descriptionCharacteristic block_descriptionCharacteristic__disActive">
                                            <table class="block_specificationInformation_table">
                                                <tr>
                                                    <th>Characteristic</th>
                                                    <th>Value</th>
                                                </tr>
                                                <tr>
                                                    <td>Ear Coupling</td>
                                                    <td>Around Ear</td>
                                                </tr>
                                                <tr>
                                                    <td>Transducer Principle</td>
                                                    <td>Dynamic, Closed-back</td>
                                                </tr>
                                                <tr>
                                                    <td>Frequency Response</td>
                                                    <td>16Hz – 22kHz</td>
                                                </tr>
                                                <tr>
                                                    <td>Sound Pressure Level (SPL)</td>
                                                    <td>113 dB (Passive: 1 kHz/1 Vrms)</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Harmonic Distortion (THD)</td>
                                                    <td>&lt;0.5% (1 kHz, 100 dB SPL)</td>
                                                </tr>
                                                <tr>
                                                    <td>Volume Control</td>
                                                    <td>Earcup control when Bluetooth connected</td>
                                                </tr>
                                                <tr>
                                                    <td>Microphone Type</td>
                                                    <td>Dual omni-directional microphone <br>(2 mic beam forming
                                                        array)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cable / Connector</td>
                                                    <td>1.4m (Detachable) / 3.5mm Angled</td>
                                                </tr>
                                                <tr>
                                                    <td>Weight</td>
                                                    <td>260g (9.17 oz)</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="block_descriptionInformation">
                                            <span>Peak performance with active noise cancelation. Sennheiser's new MOMENTUM Wireless
                                                - Closed circumauralheadphone featuring <a class="block_product__link" href="#">Bluetooth<sup>&reg;</sup></a> wireless technology and NoiseGard Hybrid active noise cancelation
                                            </span>
                                        </div>

                                        <div class="block_rating clearfix">
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

                                        </div>
                                        <div class="row ">
                                            <div class="large-6 small-12 column left-align">
                                                <div class="block_price">
                                                    <p class="block_price__currency">$499.95</p>
                                                    <p class="block_price__shipping">Shipping and taxes extra</p>
                                                </div>
                                                
                                                <button class="button button_addToCard">
                                                    Add to Cart
                                                </button>
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

    <div class="aboutMe">
        <a href="https://codepen.io/BlackStar1991/pens/public/" target="_new">
            <i class='fa fa-codepen'></i> my other Pens</a>
    </div>

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
            items.children[currentSlide].className = 'sliderBlock_positionControls__paginatorItem sliderBlock_positionControls__active';
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