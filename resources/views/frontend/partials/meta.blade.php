<!-- META ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- FAVICONS ICON ============================================= -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

<!-- PAGE TITLE HERE ============================================= -->
<title> @yield('title') </title>

<!-- MOBILE SPECIFIC ============================================= -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
 <script src="js/html5shiv.min.js"></script>
 <script src="js/respond.min.js"></script>
 <![endif]-->

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800;900&amp;family=Roboto+Condensed:wght@300;400;700&amp;display=swap"
    rel="stylesheet">

<!-- All PLUGINS CSS ============================================= -->
<link rel="stylesheet" href="{{ url('vendor/owl-carousel/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ url('vendor/magnific-popup/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ url('vendor/bootstrap-select/bootstrap-select.min.css') }}">
{{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="{{ url('vendor/swiper/swiper.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/style.css?v=') . config('app.asset') }}">

@yield('css')   

<style>
    @media (min-width: 1200px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
            max-width: 1300px;
        }
    }

    .ttr-slider.style-2 .slider-content .title {
        font-size: 60px;
    }

    @media only screen and (max-width: 991px) {
        .ttr-slider.style-2 .slider-content .title {
            font-size: 24px;
        }

        .about-wraper2 .content-left,
        .about-wraper2 .content-right {
            display: block;
        }

        .about-wraper2 .content-left {
            left: 100px;
        }

        .about-wraper2 .service-content {
            width: 135px;
            height: 40px;
        }

        .about-wraper2 .service-content:before {
            width: 25px;
            height: 25px;
            line-height: 25px;
        }

        .about-wraper2 .service-content .title {
            font-size: 14px;
        }

        .about-wraper2 .content-right .service-content {
            padding: 0 0px 0 43px;
        }

        .about-wraper2 .content-right {
            right: -100px;
        }
    }
</style>

<!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '581878287214176'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=581878287214176&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Meta Pixel Code -->


    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E1B34Y35YL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E1B34Y35YL');
  
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
</script>
