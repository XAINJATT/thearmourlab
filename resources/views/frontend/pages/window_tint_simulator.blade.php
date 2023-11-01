@extends('frontend.layout.app')

@section('title')
{{__('THE ARMOUR LAB')}}
@endsection

@section('css')
<link rel="stylesheet" href="secure/css/shoppingfef6.css?t=1696719147777">
<link rel="stylesheet" href="web-assets/css/customfef6.css?t=1696719147777">
@endsection

@section('content')
<div class="page-content bg-white">
    <div class="page-banner ovbl-dark" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="page-banner-entry text-center">
                <h1><span>Automotive</span></h1>
                <!-- Breadcrumb row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="las la-home"></i>Home > </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Automotive</li>
                    </ul>
                </nav>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>

    <section class="section-area">
        <div class="container">
            <div class="row">
                <div id="main-container">
                    <div id="content" class="shopping-layout-content">
                        <div>
                            <div class="tint-simulator-auto">
                                <div class="simulator-intro">
                                    <div class="simulator-logo"></div>
                                    <div id="tint_simulator_auto_intro" class="tint-simulator-auto-intro" data-cms-area="tint_simulator_auto_intro_en_US" data-cms-area-filters="path">
                                        <div>
                                            <div data-view="CCT-View" data-cms-cct-instanceid="CMS_HTML-388" class="cms-content cms-content-CMS_HTML cms-content-selector-CMS_HTML-388">
                                                <div>
                                                    <h1 class="simulator-title">Window Tint Simulator</h1>
                                                    <p class="simulator-description">Select a vehicle type and color.
                                                        Then see how the different tint percentages, or as we call it
                                                        Variable Light Transfers (VLT’s), could look on the front,
                                                        sides, and back of your vehicle.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="output" style="height: 593px;">
                                    <div id="base" style="height: 593px; background-image: url(web-assets/simulators/images/car-black.jpg);">
                                    </div>
                                    <div class="product" id="front" style="height: 593px;"></div>
                                    <div class="product" id="sides" style="height: 593px;"></div>
                                    <div class="product" id="back" style="height: 593px;"></div>
                                    <div class="product" id="windshield" style="height: 593px;"></div>
                                </div>
                                <div id="controls">
                                    <div class="step" id="controlType">
                                        <h3>Vehicle Type</h3><label>
                                            <input type="radio" name="baseType" value="car" checked=""> Car</label><label>
                                            <input type="radio" name="baseType" value="suv"> SUV</label><label>
                                            <input type="radio" name="baseType" value="truck"> Truck</label>
                                    </div>
                                    <div class="step" id="controlTint">
                                        <h3>Window Tints</h3>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td valign="middle">Front</td>
                                                    <td><input type="radio" class="tints" name="front" id="front70" value="70"><label for="front70" class="tintLabel">70</label></td>
                                                    <td><input type="radio" class="tints" name="front" id="front50" value="50"><label for="front50" class="tintLabel">50</label></td>
                                                    <td><input type="radio" class="tints" name="front" id="front35" value="35"><label for="front35" class="tintLabel">35</label></td>
                                                    <td><input type="radio" class="tints" name="front" id="front20" value="20"><label for="front20" class="tintLabel">20</label></td>
                                                    <td><input type="radio" class="tints" name="front" id="front05" value="05"><label for="front05" class="tintLabel">05</label></td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle">Side</td>
                                                    <td><input type="radio" class="tints" name="sides" id="sides70" value="70"><label for="sides70" class="tintLabel">70</label></td>
                                                    <td><input type="radio" class="tints" name="sides" id="sides50" value="50"><label for="sides50" class="tintLabel">50</label></td>
                                                    <td><input type="radio" class="tints" name="sides" id="sides35" value="35"><label for="sides35" class="tintLabel">35</label></td>
                                                    <td><input type="radio" class="tints" name="sides" id="sides20" value="20"><label for="sides20" class="tintLabel">20</label></td>
                                                    <td><input type="radio" class="tints" name="sides" id="sides05" value="05"><label for="sides05" class="tintLabel">05</label></td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle">Back</td>
                                                    <td><input type="radio" class="tints" name="back" id="back70" value="70"><label for="back70" class="tintLabel">70</label></td>
                                                    <td><input type="radio" class="tints" name="back" id="back50" value="50"><label for="back50" class="tintLabel">50</label></td>
                                                    <td><input type="radio" class="tints" name="back" id="back35" value="35"><label for="back35" class="tintLabel">35</label></td>
                                                    <td><input type="radio" class="tints" name="back" id="back20" value="20"><label for="back20" class="tintLabel">20</label></td>
                                                    <td><input type="radio" class="tints" name="back" id="back05" value="05"><label for="back05" class="tintLabel">05</label></td>
                                                </tr>
                                                <tr>
                                                    <td valign="windshield">Windshield <sup>*</sup></td>
                                                    <td><input type="radio" class="tints" name="windshield" id="windshield80" value="80"><label for="windshield80" class="tintLabel">80</label></td>
                                                    <td><input type="radio" class="tints" name="windshield" id="windshield70" value="70"><label for="windshield70" class="tintLabel">70</label></td>
                                                    <td colspan="3"><input type="radio" class="tints" name="windshield" id="windshield50" value="50"><label for="windshield50" class="tintLabel">50</label></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5"><sup>*</sup><small>Check local tint laws in your area</small></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="step" id="controlColors">
                                        <h3>Vehicle Color</h3>
                                        <div type="radio" class="colorRadio active" name="black" data-value="black"></div>
                                        <div type="radio" class="colorRadio" name="white" data-value="white"></div>
                                        <div type="radio" class="colorRadio" name="red" data-value="red"></div>
                                        <div type="radio" class="colorRadio" name="blue" data-value="blue"></div>
                                        <div type="radio" class="colorRadio" name="gray" data-value="gray"></div>
                                        <div type="radio" class="colorRadio" name="silver" data-value="silver"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script>
    var SC = window.SC = {
        ENVIRONMENT: {
            jsEnvironment: typeof nsglobal === 'undefined' ? 'browser' : 'server'
        },
        isCrossOrigin: function() {
            return 'www.xpel.com' !== document.location.hostname
        },
        isPageGenerator: function() {
            return typeof nsglobal !== 'undefined'
        },
        getSessionInfo: function(key) {
            var session = SC.SESSION || SC.DEFAULT_SESSION || {};
            return key ? session[key] : session
        },
        getPublishedObject: function(key) {
            return SC.ENVIRONMENT && SC.ENVIRONMENT.published && SC.ENVIRONMENT.published[key] ? SC.ENVIRONMENT.published[key] : null
        },
        Translations: {}
    };
    if (!history.pushState && SC.ENVIRONMENT.jsEnvironment === 'browser' && (location.pathname !== '/' || location.search !== '') && location.hash === '') {
        if (location.pathname === 'index.html') {
            var hash = (RegExp('fragment=' + '(.+?)(&|$)').exec(location.search) || [, ''])[1];
            location.replace(location.pathname + location.search + '/#' + unescape(hash))
        } else {
            location.replace('/#' + location.pathname + location.search)
        }
        document.write('')
    }
    if (SC.isPageGenerator()) {
        var metas = document.head.getElementsByTagName('meta');
        for (var i = 0; i < metas.length; i++) {
            if (metas[i].getAttribute('content') === 'nofollow,noindex') {
                document.head.removeChild(metas[i])
            }
        }
    }
    if (!SC.isCrossOrigin()) {
        document.getElementById('main').innerHTML = '';
        if (SC.isPageGenerator()) {
            document.body.className = document.body.className + ' seo-support'
        }
        SC.ENVIRONMENT.seoSupport = !!~document.body.className.indexOf('seo-support');
        if (SC.isPageGenerator()) {
            SC.ENVIRONMENT.PROFILE = {}
        }
        if (SC.ENVIRONMENT.jsEnvironment === 'browser' && !SC.isCrossOrigin()) {
            var datetime = new Date().getTime();
            var reference_tag = document.getElementsByTagName('script')[0];
            var new_script_tag = document.createElement('script');
            new_script_tag.src = '' + datetime + '';
            new_script_tag.type = 'text/javascript';
            new_script_tag.async = false;
            reference_tag.parentNode.insertBefore(new_script_tag, reference_tag)
        }
    }


    $(document).ready(function() {
        // Get references to the relevant elements
        var base = $("#base");
        var radioButtons = $("[name='baseType']");
        var colorRadios = $(".colorRadio");
        var tintRadios = $(".tints");
        var productFront = $("#front");
        var productSides = $("#sides");
        var productBack = $("#back");
        var productWindshield = $("#windshield");

        // Initialize the default color, vehicle type, and tint
        var currentColor = "black";
        var currentType = "car";
        var currentTint = ""; // Default tint value
        var currentFrontPosition = "front";
        var currentSidesPosition = "sides";
        var currentBackPosition = "back";
        var currentWindshieldPosition = "windshield";

        // Event listener for tint radios
        $(".tints").on("click", function() {
            var position = $(this).attr("name");
            var value = $(this).attr("value");
            updateProductPosition(position, value);
        });

        // Function to update the product position
        function updateProductPosition(position, value) {
            if (position === "front") {
                updateProductImages("front", value);
            } else if (position === "sides") {
                updateProductImages("sides", value);
            } else if (position === "back") {
                updateProductImages("back", value);
            } else if (position === "windshield") {
                updateProductImages("windshield", value);
            }
            
        }
        // function updateProductPosition(position) {
        //     if (position === "front") {
        //         currentFrontPositionChange = "front";
        //     } else if (position === "sides") {
        //         currentSidesPositionChange = "sides";
        //     } else if (position === "back") {
        //         currentBackPositionChange = "back";
        //     } else if (position === "windshield") {
        //         currentWindshieldPositionChange = "windshield";
        //     }
        //     updateProductImages();
        // }

        // Event listener for product position radio buttons
        var productPositionRadios = $("[name='productPosition']");
        productPositionRadios.on("change", function() {
            var selectedPosition = $(this).val();
            updateProductPosition(selectedPosition);
        });

        // Initialize the base image and product images
        updateBaseImage();

        // Function to update the base image
        function updateBaseImage() {
            var selectedType = radioButtons.filter(":checked").val();
            currentType = selectedType;
            base.css("background-image", "url(web-assets/simulators/images/" + currentType + "-" + currentColor + ".jpg)");
        }

        // Function to update the product images based on the selected vehicle type, tint, and position
        function updateProductImages(currentPositionChange, currentTint) {
            var selectedType = currentType.toLowerCase();
            var productImageFrontURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentFrontPosition + "-" + currentTint + ".png";
            var productImageSidesURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentSidesPosition + "-" + currentTint + ".png";
            var productImageBackURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentBackPosition + "-" + currentTint + ".png";
            var productImageWindshieldURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentWindshieldPosition + "-" + currentTint + ".png";

            if (currentPositionChange === "front") {
                productFront.css("background-image", "url(" + productImageFrontURL + ")");
            }
            if (currentPositionChange === "sides") {
                productSides.css("background-image", "url(" + productImageSidesURL + ")");
            }
            if (currentPositionChange === "back") {
                productBack.css("background-image", "url(" + productImageBackURL + ")");
            }
            if (currentPositionChange === "windshield") {
                productWindshield.css("background-image", "url(" + productImageWindshieldURL + ")");
            }
        }
        // function updateProductImages() {
        //     var selectedType = currentType.toLowerCase();
        //     var productImageFrontURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentFrontPosition + "-" + currentTint + ".png";
        //     var productImageSidesURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentSidesPosition + "-" + currentTint + ".png";
        //     var productImageBackURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentBackPosition + "-" + currentTint + ".png";
        //     var productImageWindshieldURL = "web-assets/simulators/images/tints/" + selectedType + "-" + currentWindshieldPosition + "-" + currentTint + ".png";

        //     if (currentFrontPositionChange === "front") {
        //         productFront.css("background-image", "url(" + productImageFrontURL + ")");
        //     }
        //     if (currentSidesPositionChange === "sides") {
        //         productSides.css("background-image", "url(" + productImageSidesURL + ")");
        //     }
        //     if (currentBackPositionChange === "back") {
        //         productBack.css("background-image", "url(" + productImageBackURL + ")");
        //     }
        //     if (currentWindshieldPositionChange === "windshield") {
        //         productWindshield.css("background-image", "url(" + productImageWindshieldURL + ")");
        //     }
        // }

        // Event listener for radio buttons
        radioButtons.on("change", function() {
            updateBaseImage();
            updateProductImages();
        });

        // Event listener for color radios
        colorRadios.on("click", function() {
            currentColor = $(this).data("value");
            updateBaseImage();
            updateProductImages();
        });

        // Event listener for tint radios
        tintRadios.on("change", function() {
            currentTint = $(this).val();
            updateProductImages();
        });
    });


    // document.addEventListener("DOMContentLoaded", function() {
    //     // Get references to the relevant elements
    //     const base = document.getElementById("base");
    //     const radioButtons = document.getElementsByName("baseType");
    //     const colorRadios = document.querySelectorAll(".colorRadio");
    //     const tintRadios = document.querySelectorAll(".tints");
    //     const productFront = document.getElementById("front");
    //     const productSides = document.getElementById("sides");
    //     const productBack = document.getElementById("back");
    //     const productWindshield = document.getElementById("windshield");

    //     // Initialize the default color, vehicle type, and tint
    //     let currentColor = "black";
    //     let currentType = "car";
    //     let currentTint = ""; // Default tint value
    //     let currentFrontPosition = "front";
    //     let currentSidesPosition = "sides";
    //     let currentBackPosition = "back";
    //     let currentWindshieldPosition = "windshield";

    //     // Function to update the product position
    //     function updateProductPosition(position) {
    //         if (position === "front") {
    //             currentFrontPosition = "front";
    //         } else if (position === "sides") {
    //             currentSidesPosition = "sides";
    //         } else if (position === "back") {
    //             currentBackPosition = "back";
    //         } else if (position === "windshield") {
    //             currentWindshieldPosition = "windshield";
    //         }

    //         updateProductImages();
    //     }

    //     // Event listener for product position radio buttons
    //     const productPositionRadios = document.querySelectorAll("input[name='productPosition']");
    //     productPositionRadios.forEach(function(radio) {
    //         radio.addEventListener("change", function() {
    //             const selectedPosition = radio.value;
    //             updateProductPosition(selectedPosition);
    //         });
    //     });

    //     // Initialize the base image and product images
    //     updateBaseImage();
    //     updateProductImages();

    //     // Function to update the base image
    //     function updateBaseImage() {
    //         const selectedType = Array.from(radioButtons).find((radio) => radio.checked).value;
    //         currentType = selectedType;
    //         base.style.backgroundImage = `url(web-assets/simulators/images/${currentType}-${currentColor}.jpg)`;
    //     }

    //     // Function to update the product images based on the selected vehicle type, tint, and position
    //     function updateProductImages() {
    //         const selectedType = currentType.toLowerCase();
    //         const productImageFrontURL = `web-assets/simulators/images/tints/${selectedType}-${currentFrontPosition}-${currentTint}.png`;
    //         const productImageSidesURL = `web-assets/simulators/images/tints/${selectedType}-${currentSidesPosition}-${currentTint}.png`;
    //         const productImageBackURL = `web-assets/simulators/images/tints/${selectedType}-${currentBackPosition}-${currentTint}.png`;
    //         const productImageWindshieldURL = `web-assets/simulators/images/tints/${selectedType}-${currentWindshieldPosition}-${currentTint}.png`;
    //         console.log(currentFrontPosition);
    //         if (currentFrontPosition === "front") {
    //             productFront.style.backgroundImage = `url(${productImageFrontURL})`;
    //         }
    //         if (currentSidesPosition === "sides") {
    //             productSides.style.backgroundImage = `url(${productImageSidesURL})`;
    //         }
    //         if (currentBackPosition === "back") {
    //             productBack.style.backgroundImage = `url(${productImageBackURL})`;
    //         }
    //         if (currentWindshieldPosition === "windshield") {
    //             productWindshield.style.backgroundImage = `url(${productImageWindshieldURL})`;
    //         }
    //     }

    //     // Event listener for radio buttons
    //     radioButtons.forEach(function(radioButton) {
    //         radioButton.addEventListener("change", function() {
    //             updateBaseImage();
    //             updateProductImages();
    //         });
    //     });

    //     // Event listener for color radios
    //     colorRadios.forEach(function(colorRadio) {
    //         colorRadio.addEventListener("click", function() {
    //             currentColor = colorRadio.getAttribute("data-value");
    //             updateBaseImage();
    //             updateProductImages();
    //         });
    //     });

    //     // Event listener for tint radios
    //     tintRadios.forEach(function(tintRadio) {
    //         tintRadio.addEventListener("change", function() {
    //             currentTint = tintRadio.value;
    //             updateProductImages();
    //         });
    //     });
    // });
</script>


<script src="secure/shopping.environment674b.ssp?lang=en_US&amp;cur=null&amp;X-SC-Touchpoint=shopping&amp;t=1696719147777"></script>

<script src="secure/shopping-templatesfef6.js?t=1696719147777"></script>

<script src="secure/javascript/shoppingfef6.js?t=1696719147777"></script>

<script type="text/javascript" src="api/cms/v2/sites/cms-templates"></script>


@endsection