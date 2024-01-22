<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#f20c49">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Random Name Picker for Lucky Draw</title>


    <script defer="defer" src="{{ asset('assets/js/vendor.57b90829.js') }}"></script>
    <script defer="defer" src="{{ asset('assets/js/app.3560f3c5.js') }}"></script>
    <link href="{{ asset('assets/css/app.3560f3c5.css') }}" rel="stylesheet">
</head>

<body>
    <div class="theme--red" id="app">
        <div class="main">
            <div class="control-group"><button class="icon-button icon-button--small" id="fullscreen-button">
                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 40 40" style="enable-background:new 0 0 40 40" xml:space="preserve"
                        fill="currentcolor">
                        <g id="fullscreen-icon">
                            <g>
                                <path d="M8.3,5H1.7C0.7,5,0,5.7,0,6.7v6.7C0,14.3,0.7,15,1.7,15c0.9,0,1.7-0.7,1.7-1.7v-5h5c0.9,0,1.7-0.7,1.7-1.7
   S9.3,5,8.3,5z" />
                                <path d="M40,13.3V6.7C40,5.7,39.3,5,38.3,5h-6.7C30.7,5,30,5.7,30,6.7c0,0.9,0.7,1.7,1.7,1.7h5v5
   c0,0.9,0.7,1.7,1.7,1.7S40,14.3,40,13.3z" />
                                <path d="M31.7,35h6.7c0.9,0,1.7-0.7,1.7-1.7v-6.7c0-0.9-0.7-1.7-1.7-1.7c-0.9,0-1.7,0.7-1.7,1.7v5h-5
   c-0.9,0-1.7,0.7-1.7,1.7S30.7,35,31.7,35z" />
                                <path d="M0,26.7v6.7C0,34.3,0.7,35,1.7,35h6.7c0.9,0,1.7-0.7,1.7-1.7c0-0.9-0.7-1.7-1.7-1.7h-5v-5
   c0-0.9-0.7-1.7-1.7-1.7S0,25.7,0,26.7z" />
                            </g>
                        </g>
                    </svg>
                </button><button class="icon-button icon-button--small" id="settings-button">
                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 40 40" style="enable-background:new 0 0 40 40" xml:space="preserve"
                        fill="currentcolor">
                        <g id="setting-icon">
                            <path d="M6.7,13.3c3.1,0,5.7-2.1,6.5-5h25.2c0.9,0,1.7-0.7,1.7-1.7C40,5.7,39.3,5,38.3,5H13.1c-0.7-2.9-3.4-5-6.5-5
  C3,0,0,3,0,6.7S3,13.3,6.7,13.3z M6.7,3.3c1.8,0,3.3,1.5,3.3,3.3S8.5,10,6.7,10S3.3,8.5,3.3,6.7S4.8,3.3,6.7,3.3z" />
                            <path d="M33.3,26.7c-3.1,0-5.7,2.1-6.5,5H1.7c-0.9,0-1.7,0.7-1.7,1.7S0.7,35,1.7,35h25.2c0.7,2.9,3.4,5,6.5,5
  c3.7,0,6.7-3,6.7-6.7S37,26.7,33.3,26.7z M33.3,36.7c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3c1.8,0,3.3,1.5,3.3,3.3
  C36.7,35.2,35.2,36.7,33.3,36.7z" />
                            <path d="M38.3,18.3H26.5c-0.7-2.9-3.4-5-6.5-5s-5.7,2.1-6.5,5H1.7C0.7,18.3,0,19.1,0,20c0,0.9,0.7,1.7,1.7,1.7h11.9
  c0.7,2.9,3.4,5,6.5,5s5.7-2.1,6.5-5h11.9c0.9,0,1.7-0.7,1.7-1.7S39.3,18.3,38.3,18.3z M20,23.3c-1.8,0-3.3-1.5-3.3-3.3
  s1.5-3.3,3.3-3.3s3.3,1.5,3.3,3.3S21.8,23.3,20,23.3z" />
                        </g>
                    </svg>
                </button></div><canvas class="confetti" id="confetti-canvas"></canvas>
            <div id="lucky-draw">
                <div class="title">
                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 496 94" style="enable-background:new 0 0 496 94" xml:space="preserve"
                        aria-labelledby="Lucky Draw" role="img">
                        <style>
                            #title_svg .st0 {
                                opacity: .1
                            }

                            #title_svg .st1 {
                                fill: #000000
                            }

                            #title_svg .st2 {
                                fill: #808080
                            }

                            #title_svg .st3 {
                                fill: currentcolor
                            }

                            #title_svg .st4 {
                                fill: #FFFFFF
                            }
                        </style>
                        <g id="title_svg">
                            <g class="st0">
                                <path class="st1" d="M29.7,10h-9.3c-5.5,0-10,4.5-10,10v50.8c0,5.5,4.5,10,10,10h33c5.5,0,10-4.5,10-10v-7.6c0-5.5-4.5-10-10-10
   H39.7V20C39.7,14.5,35.2,10,29.7,10L29.7,10z" />
                                <path class="st2" d="M20.4,70.8V20h9.3v43.1h23.7v7.6h-33V70.8z" />
                                <path class="st1" d="M99.8,25.6h-9c-2.9,0-5.4,1.2-7.3,3.1c-1.8-1.9-4.4-3.1-7.3-3.1h-9c-5.5,0-10,4.5-10,10v21.2
   c0,15.1,8.8,24.5,23,24.5c2.6,0,5.1-0.4,7.4-1.2c1.1,0.4,2.2,0.6,3.4,0.6h8.8c5.5,0,10-4.5,10-10V35.6
   C109.8,30,105.3,25.6,99.8,25.6L99.8,25.6z" />
                                <path class="st2" d="M99.8,35.6v35.2H91v-5.4c-1.1,1.9-2.6,3.4-4.5,4.4s-4,1.5-6.3,1.5c-8.6,0-13-4.8-13-14.5V35.6h9v21.3
   c0,2.5,0.5,4.3,1.5,5.5s2.6,1.8,4.8,1.8c2.5,0,4.5-0.8,6-2.5s2.3-3.9,2.3-6.6V35.6H99.8z" />
                                <path class="st1" d="M134.2,24.7c-5.3,0-10.2,1.2-14.5,3.5c-4.5,2.5-8,6-10.4,10.5c-2.3,4.3-3.5,9.1-3.5,14.4s1.1,10.1,3.3,14.2
   c2.4,4.5,5.8,8,10.3,10.4c4.2,2.3,9,3.5,14.4,3.5c3.6,0,7.2-0.6,10.6-1.7c3.7-1.2,6.9-3,9.5-5.4c3.1-2.8,4.1-7.3,2.5-11.2
   l-2.6-6.3c-0.6-1.5-1.6-2.8-2.7-3.8c1.2-1,2.1-2.3,2.8-3.8l2.6-6.3c1.6-3.8,0.6-8.3-2.4-11.1c-2.5-2.3-5.7-4.1-9.4-5.4
   C141.3,25.3,137.8,24.7,134.2,24.7L134.2,24.7z M135.2,54.3c0-0.3-0.1-0.7-0.1-1.2c0-0.6,0-1,0.1-1.3c0.4,0,0.8,0.1,1.2,0.3
   c0.6,0.2,1.1,0.5,1.7,1c-0.6,0.4-1.1,0.8-1.7,1C136,54.2,135.6,54.2,135.2,54.3L135.2,54.3z" />
                                <path class="st2" d="M124.3,69.1c-2.7-1.5-4.8-3.6-6.2-6.3c-1.4-2.7-2.2-5.9-2.2-9.6c0-3.6,0.8-6.9,2.3-9.7s3.7-5,6.4-6.5
   c2.8-1.5,6-2.3,9.6-2.3c2.5,0,4.9,0.4,7.3,1.2c2.4,0.8,4.3,1.9,5.7,3.2l-2.6,6.3c-1.5-1.2-3.1-2.1-4.7-2.7
   c-1.7-0.6-3.3-0.9-4.9-0.9c-3.1,0-5.5,1-7.3,2.9c-1.7,1.9-2.6,4.7-2.6,8.4c0,3.6,0.9,6.4,2.6,8.3c1.7,1.9,4.2,2.9,7.3,2.9
   c1.6,0,3.3-0.3,4.9-0.9c1.7-0.6,3.2-1.5,4.7-2.7l2.6,6.3c-1.5,1.4-3.5,2.5-5.9,3.3s-4.9,1.2-7.5,1.2
   C130.2,71.3,127,70.6,124.3,69.1z" />
                                <path class="st1" d="M170.6,10h-9c-5.5,0-10,4.5-10,10v50.8c0,5.5,4.5,10,10,10h9c3,0,5.7-1.3,7.6-3.4l0.3,0.3
   c1.9,2,4.5,3.1,7.3,3.1H197c4,0,7.6-2.4,9.2-6c1.6-3.6,0.9-7.9-1.8-10.8l-10.6-11.4l9.4-10c2.7-2.9,3.5-7.2,1.9-10.8
   c-1.6-3.7-5.2-6-9.2-6H185c-1.5,0-2.9,0.3-4.2,0.9V20C180.6,14.5,176.1,10,170.6,10L170.6,10z" />
                                <path class="st2"
                                    d="M196.9,70.8h-11.2l-15.1-16.1v16.1h-9V20h9v31l14.2-15.3h10.9l-15.8,16.8L196.9,70.8z" />
                                <path class="st1" d="M241.7,25.6h-8.9c-4.1,0-7.7,2.4-9.2,6.2l-0.8,2.1l-0.8-2c-1.5-3.8-5.2-6.3-9.3-6.3h-9.5
   c-3.4,0-6.5,1.7-8.4,4.5c-1.8,2.8-2.2,6.4-0.8,9.5l12.9,29.7l-4.6,10.3c-1.4,3.1-1.1,6.7,0.7,9.5s5,4.6,8.4,4.6h9.1
   c4,0,7.6-2.3,9.2-6l21.2-48.1c1.4-3.1,1.1-6.7-0.8-9.5C248.2,27.3,245,25.6,241.7,25.6L241.7,25.6z M241.7,45.6L241.7,45.6
   L241.7,45.6L241.7,45.6z" />
                                <path class="st2"
                                    d="M232.8,35.6h8.9l-21.2,48.1h-9.1l6.4-14.3l-14.7-33.8h9.5l9.9,24.8L232.8,35.6z" />
                                <path class="st1" d="M302.3,10h-18.7c-5.5,0-10,4.5-10,10v50.8c0,5.5,4.5,10,10,10h18.7c11,0,19.8-3.2,26.3-9.5
   c6.6-6.4,9.9-15.1,9.9-25.9s-3.3-19.5-9.9-25.9C322.1,13.2,313.2,10,302.3,10L302.3,10z M302.9,53.2V37.6c2.3,0.1,4.1,0.6,4.8,1.4
   c1,1,1.5,3.3,1.5,6.3c0,3.1-0.6,5.4-1.5,6.4C306.9,52.5,305.2,53,302.9,53.2L302.9,53.2z" />
                                <path class="st2"
                                    d="M283.6,20h18.7c8.3,0,14.7,2.2,19.3,6.7c4.6,4.4,6.9,10.7,6.9,18.7s-2.3,14.3-6.9,18.7
   c-4.6,4.5-11,6.7-19.3,6.7h-18.7V20z M301.7,63.2c11.7,0,17.5-6,17.5-17.9s-5.8-17.8-17.5-17.8h-8.9v35.6L301.7,63.2L301.7,63.2z" />
                                <path class="st1"
                                    d="M368.3,24.6c-0.3,0-0.5,0-0.8,0l-2.7,0.2c-2.7,0.2-5,0.7-7,1.3c-1.1-0.4-2.3-0.6-3.6-0.6h-8.6
   c-5.5,0-10,4.5-10,10v35.2c0,5.5,4.5,10,10,10h9c5.5,0,10-4.5,10-10V52.6l5.1-0.5c5.4-0.5,9.4-5.3,9-10.7l-0.6-7.6
   c-0.2-2.6-1.4-5.1-3.5-6.8C373,25.5,370.7,24.6,368.3,24.6L368.3,24.6z M363.5,52.9L363.5,52.9L363.5,52.9L363.5,52.9z" />
                                <path class="st2" d="M368.9,42.2l-5.3,0.5c-6,0.6-8.9,3.6-8.9,9.1v19h-9V35.6h8.6v6.2c1.8-4.2,5.6-6.5,11.3-6.9l2.7-0.2
   L368.9,42.2z" />
                                <path class="st1" d="M394.8,64.9c2.4,0,4.4-0.8,5.9-2.4c1.5-1.6,2.3-3.7,2.3-6.2v-1.5h-1.3c-3.2,0-5.7,0.1-7.5,0.4
   c-1.8,0.3-3,0.8-3.8,1.5s-1.2,1.7-1.2,3c0,1.5,0.5,2.8,1.6,3.8S393.2,64.9,394.8,64.9 M396.9,24.7c-3.4,0-7,0.5-10.7,1.6
   c-3.7,1.1-6.9,2.5-9.7,4.2c-4.1,2.6-5.7,7.7-3.9,12.2l2.1,5.1c-2,2.4-4.2,6.4-4.2,12.5c0,4,1.1,7.8,3.3,11.1
   c2.1,3.2,4.9,5.7,8.4,7.4c3.3,1.7,7,2.5,10.9,2.5c2.4,0,4.7-0.4,6.9-1c1,0.3,2,0.5,3,0.5h8.6c5.5,0,10-4.5,10-10V49.4
   c0-7.7-2.2-13.8-6.5-18.2C410.6,26.9,404.6,24.7,396.9,24.7L396.9,24.7z" />
                                <path class="st2" d="M407.9,38.3c2.4,2.4,3.6,6.1,3.6,11.1v21.4h-8.6v-5.4c-0.8,1.9-2.1,3.3-3.9,4.4c-1.8,1.1-3.8,1.6-6.1,1.6
   c-2.4,0-4.5-0.5-6.4-1.4c-1.9-1-3.4-2.3-4.5-4s-1.7-3.6-1.7-5.6c0-2.6,0.7-4.6,2-6.1s3.5-2.6,6.4-3.2c3-0.7,7.1-1,12.3-1h1.8v-1.7
   c0-2.4-0.5-4.1-1.5-5.2s-2.7-1.6-5.1-1.6c-1.9,0-3.8,0.3-5.9,1c-2,0.6-4,1.5-6,2.7l-2.5-6.2c2-1.2,4.3-2.3,7.1-3.1
   c2.8-0.8,5.4-1.2,7.9-1.2C401.8,34.7,405.5,35.9,407.9,38.3z M400.7,62.4c1.5-1.6,2.3-3.7,2.3-6.2v-1.5h-1.3
   c-3.2,0-5.7,0.1-7.5,0.4c-1.8,0.3-3,0.8-3.8,1.5s-1.2,1.7-1.2,3c0,1.5,0.5,2.8,1.6,3.8s2.4,1.5,4,1.5
   C397.2,64.9,399.2,64.1,400.7,62.4z" />
                                <path class="st1" d="M485.6,25.6h-8.8c-3.8,0-7.3,2.2-9,5.6c-1.7-3.4-5.1-5.6-9-5.6h-6.5c-3.9,0-7.3,2.2-9,5.6
   c-1.7-3.4-5.1-5.6-9-5.6h-9.2c-3.3,0-6.4,1.6-8.3,4.4c-1.9,2.7-2.2,6.2-1,9.3l13.9,35.2c1.5,3.8,5.2,6.3,9.3,6.3h7.8
   c3.5,0,6.7-1.9,8.5-4.8c1.8,2.9,5,4.8,8.5,4.8h7.8c4.1,0,7.8-2.5,9.3-6.3l13.8-35.2c1.2-3.1,0.8-6.6-1-9.3
   C492,27.2,488.9,25.6,485.6,25.6L485.6,25.6z M485.6,45.6L485.6,45.6L485.6,45.6L485.6,45.6z" />
                                <path class="st2" d="M476.8,35.6h8.8l-13.8,35.2H464l-8.6-22.7L447,70.8h-7.8l-13.9-35.2h9.2l9,24.5l9-24.5h6.5l9,24.6L476.8,35.6
   z" />
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <path class="st3" d="M24.7,0h-9.3c-5.5,0-10,4.5-10,10v50.8c0,5.5,4.5,10,10,10h33c5.5,0,10-4.5,10-10v-7.6c0-5.5-4.5-10-10-10
     H34.7V10C34.7,4.5,30.2,0,24.7,0L24.7,0z" />
                                        <path class="st4" d="M15.4,60.8V10h9.3v43.1h23.7v7.6h-33V60.8z" />
                                    </g>
                                    <g>
                                        <path class="st3" d="M94.8,15.6h-9c-2.9,0-5.4,1.2-7.3,3.1c-1.8-1.9-4.4-3.1-7.3-3.1h-9c-5.5,0-10,4.5-10,10v21.2
     c0,15.1,8.8,24.5,23,24.5c2.6,0,5.1-0.4,7.4-1.2c1.1,0.4,2.2,0.6,3.4,0.6h8.8c5.5,0,10-4.5,10-10V25.6
     C104.8,20,100.3,15.6,94.8,15.6L94.8,15.6z" />
                                        <path class="st4" d="M94.8,25.6v35.2H86v-5.4c-1.1,1.9-2.6,3.4-4.5,4.4s-4,1.5-6.3,1.5c-8.6,0-13-4.8-13-14.5V25.6h9v21.3
     c0,2.5,0.5,4.3,1.5,5.5s2.6,1.8,4.8,1.8c2.5,0,4.5-0.8,6-2.5s2.3-3.9,2.3-6.6V25.6H94.8z" />
                                    </g>
                                    <g>
                                        <path class="st3" d="M129.2,14.7c-5.3,0-10.2,1.2-14.5,3.5c-4.5,2.5-8,6-10.4,10.5c-2.3,4.3-3.5,9.1-3.5,14.4s1.1,10.1,3.3,14.2
     c2.4,4.5,5.8,8,10.3,10.4c4.2,2.3,9,3.5,14.4,3.5c3.6,0,7.2-0.6,10.6-1.7c3.7-1.2,6.9-3,9.5-5.4c3.1-2.8,4.1-7.3,2.5-11.2
     l-2.6-6.3c-0.6-1.5-1.6-2.8-2.7-3.8c1.2-1,2.1-2.3,2.8-3.8l2.6-6.3c1.6-3.8,0.6-8.3-2.4-11.1c-2.5-2.3-5.7-4.1-9.4-5.4
     C136.3,15.3,132.8,14.7,129.2,14.7L129.2,14.7z M130.2,44.3c0-0.3-0.1-0.7-0.1-1.2c0-0.6,0-1,0.1-1.3c0.4,0,0.8,0.1,1.2,0.3
     c0.6,0.2,1.1,0.5,1.7,1c-0.6,0.4-1.1,0.8-1.7,1C131,44.2,130.6,44.2,130.2,44.3L130.2,44.3z" />
                                        <path class="st4" d="M119.3,59.1c-2.7-1.5-4.8-3.6-6.2-6.3c-1.4-2.7-2.2-5.9-2.2-9.6c0-3.6,0.8-6.9,2.3-9.7s3.7-5,6.4-6.5
     c2.8-1.5,6-2.3,9.6-2.3c2.5,0,4.9,0.4,7.3,1.2c2.4,0.8,4.3,1.9,5.7,3.2l-2.6,6.3c-1.5-1.2-3.1-2.1-4.7-2.7
     c-1.7-0.6-3.3-0.9-4.9-0.9c-3.1,0-5.5,1-7.3,2.9c-1.7,1.9-2.6,4.7-2.6,8.4c0,3.6,0.9,6.4,2.6,8.3s4.2,2.9,7.3,2.9
     c1.6,0,3.3-0.3,4.9-0.9c1.7-0.6,3.2-1.5,4.7-2.7l2.6,6.3c-1.5,1.4-3.5,2.5-5.9,3.3s-4.9,1.2-7.5,1.2
     C125.2,61.3,122,60.6,119.3,59.1z" />
                                    </g>
                                    <g>
                                        <path class="st3" d="M165.6,0h-9c-5.5,0-10,4.5-10,10v50.8c0,5.5,4.5,10,10,10h9c3,0,5.7-1.3,7.6-3.4l0.3,0.3
     c1.9,2,4.5,3.1,7.3,3.1H192c4,0,7.6-2.4,9.2-6c1.6-3.6,0.9-7.9-1.8-10.8l-10.6-11.4l9.4-10c2.7-2.9,3.5-7.2,1.9-10.8
     c-1.6-3.7-5.2-6-9.2-6H180c-1.5,0-2.9,0.3-4.2,0.9V10C175.6,4.5,171.1,0,165.6,0L165.6,0z" />
                                        <path class="st4"
                                            d="M191.9,60.8h-11.2l-15.1-16.1v16.1h-9V10h9v31l14.2-15.3h10.9l-15.8,16.8L191.9,60.8z" />
                                    </g>
                                    <g>
                                        <path class="st3" d="M236.7,15.6h-8.9c-4.1,0-7.7,2.4-9.2,6.2l-0.8,2.1l-0.8-2c-1.5-3.8-5.2-6.3-9.3-6.3h-9.5
     c-3.4,0-6.5,1.7-8.4,4.5c-1.8,2.8-2.2,6.4-0.8,9.5l12.9,29.7l-4.6,10.3c-1.4,3.1-1.1,6.7,0.7,9.5s5,4.6,8.4,4.6h9.1
     c4,0,7.6-2.3,9.2-6l21.2-48.1c1.4-3.1,1.1-6.7-0.8-9.5C243.2,17.3,240,15.6,236.7,15.6L236.7,15.6z M236.7,35.6L236.7,35.6
     L236.7,35.6L236.7,35.6z" />
                                        <path class="st4"
                                            d="M227.8,25.6h8.9l-21.2,48.1h-9.1l6.4-14.3l-14.7-33.8h9.5l9.9,24.8L227.8,25.6z" />
                                    </g>
                                    <g>
                                        <path class="st3" d="M297.3,0h-18.7c-5.5,0-10,4.5-10,10v50.8c0,5.5,4.5,10,10,10h18.7c11,0,19.8-3.2,26.3-9.5
     c6.6-6.4,9.9-15.1,9.9-25.9s-3.3-19.5-9.9-25.9C317.1,3.2,308.2,0,297.3,0L297.3,0z M297.9,43.2V27.6c2.3,0.1,4.1,0.6,4.8,1.4
     c1,1,1.5,3.3,1.5,6.3c0,3.1-0.6,5.4-1.5,6.4C301.9,42.5,300.2,43,297.9,43.2L297.9,43.2z" />
                                        <path class="st4" d="M278.6,10h18.7c8.3,0,14.7,2.2,19.3,6.7c4.6,4.4,6.9,10.7,6.9,18.7s-2.3,14.3-6.9,18.7
     c-4.6,4.5-11,6.7-19.3,6.7h-18.7V10z M296.7,53.2c11.7,0,17.5-6,17.5-17.9s-5.8-17.8-17.5-17.8h-8.9v35.6L296.7,53.2L296.7,53.2
     z" />
                                    </g>
                                    <g>
                                        <path class="st3"
                                            d="M363.3,14.6c-0.3,0-0.5,0-0.8,0l-2.7,0.2c-2.7,0.2-5,0.7-7,1.3c-1.1-0.4-2.3-0.6-3.6-0.6h-8.6
     c-5.5,0-10,4.5-10,10v35.2c0,5.5,4.5,10,10,10h9c5.5,0,10-4.5,10-10V42.6l5.1-0.5c5.4-0.5,9.4-5.3,9-10.7l-0.6-7.6
     c-0.2-2.6-1.4-5.1-3.5-6.8C368,15.5,365.7,14.6,363.3,14.6L363.3,14.6z M358.5,42.9L358.5,42.9L358.5,42.9L358.5,42.9z" />
                                        <path class="st4" d="M363.9,32.2l-5.3,0.5c-6,0.6-8.9,3.6-8.9,9.1v19h-9V25.6h8.6v6.2c1.8-4.2,5.6-6.5,11.3-6.9l2.7-0.2
     L363.9,32.2z" />
                                    </g>
                                    <g>
                                        <path class="st3" d="M389.8,54.9c2.4,0,4.4-0.8,5.9-2.4s2.3-3.7,2.3-6.2v-1.5h-1.3c-3.2,0-5.7,0.1-7.5,0.4
     c-1.8,0.3-3,0.8-3.8,1.5s-1.2,1.7-1.2,3c0,1.5,0.5,2.8,1.6,3.8S388.2,54.9,389.8,54.9 M391.9,14.7c-3.4,0-7,0.5-10.7,1.6
     s-6.9,2.5-9.7,4.2c-4.1,2.6-5.7,7.7-3.9,12.2l2.1,5.1c-2,2.4-4.2,6.4-4.2,12.5c0,4,1.1,7.8,3.3,11.1c2.1,3.2,4.9,5.7,8.4,7.4
     c3.3,1.7,7,2.5,10.9,2.5c2.4,0,4.7-0.4,6.9-1c1,0.3,2,0.5,3,0.5h8.6c5.5,0,10-4.5,10-10V39.4c0-7.7-2.2-13.8-6.5-18.2
     C405.6,16.9,399.6,14.7,391.9,14.7L391.9,14.7z" />
                                        <path class="st4" d="M402.9,28.3c2.4,2.4,3.6,6.1,3.6,11.1v21.4h-8.6v-5.4c-0.8,1.9-2.1,3.3-3.9,4.4c-1.8,1.1-3.8,1.6-6.1,1.6
     c-2.4,0-4.5-0.5-6.4-1.4c-1.9-1-3.4-2.3-4.5-4s-1.7-3.6-1.7-5.6c0-2.6,0.7-4.6,2-6.1s3.5-2.6,6.4-3.2c3-0.7,7.1-1,12.3-1h1.8
     v-1.7c0-2.4-0.5-4.1-1.5-5.2s-2.7-1.6-5.1-1.6c-1.9,0-3.8,0.3-5.9,1c-2,0.6-4,1.5-6,2.7l-2.5-6.2c2-1.2,4.3-2.3,7.1-3.1
     c2.8-0.8,5.4-1.2,7.9-1.2C396.8,24.7,400.5,25.9,402.9,28.3z M395.7,52.4c1.5-1.6,2.3-3.7,2.3-6.2v-1.5h-1.3
     c-3.2,0-5.7,0.1-7.5,0.4c-1.8,0.3-3,0.8-3.8,1.5s-1.2,1.7-1.2,3c0,1.5,0.5,2.8,1.6,3.8s2.4,1.5,4,1.5
     C392.2,54.9,394.2,54.1,395.7,52.4z" />
                                    </g>
                                    <g>
                                        <path class="st3" d="M480.6,15.6h-8.8c-3.8,0-7.3,2.2-9,5.6c-1.7-3.4-5.1-5.6-9-5.6h-6.5c-3.9,0-7.3,2.2-9,5.6
     c-1.7-3.4-5.1-5.6-9-5.6h-9.2c-3.3,0-6.4,1.6-8.3,4.4c-1.9,2.7-2.2,6.2-1,9.3l13.9,35.2c1.5,3.8,5.2,6.3,9.3,6.3h7.8
     c3.5,0,6.7-1.9,8.5-4.8c1.8,2.9,5,4.8,8.5,4.8h7.8c4.1,0,7.8-2.5,9.3-6.3l13.8-35.2c1.2-3.1,0.8-6.6-1-9.3
     C487,17.2,483.9,15.6,480.6,15.6L480.6,15.6z M480.6,35.6L480.6,35.6L480.6,35.6L480.6,35.6z" />
                                        <path class="st4" d="M471.8,25.6h8.8l-13.8,35.2H459l-8.6-22.7L442,60.8h-7.8l-13.9-35.2h9.2l9,24.5l9-24.5h6.5l9,24.6
     L471.8,25.6z" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="slot">
                    <div class="slot__outer">
                        <div class="slot__inner">
                            <div class="slot__shadow"></div>
                            <div class="reel" id="reel"></div>
                        </div>
                    </div>
                    <div class="sunburst" id="sunburst"><img
                            src="{{ asset('assets/images/sunburst.0838324a.svg') }}" alt="sunburst"></div>
                </div><button class="solid-button" id="draw-button">Draw</button>
            </div>
            <div>
                <input type="hidden" id="winner" value="">
            </div>
            <div class="settings" id="settings">
                <div class="settings__panel" id="settings-panel">
                    <div class="settings__panel__group">
                        <h1 class="settings__title">Settings</h1>
                        <div class="input-group"><label class="input-label" for="name-list">Name List</label>
                            <textarea value="@if ($names) {{ $names }} @endif"
                                class="input-field input-field--textarea" rows="8" placeholder="Separate each name by line break"
                                id="name-list">
@if ($names)
{{ $names }}
@endif
</textarea>
                        </div>
                        <div class="input-group input-group--2-column"><label class="input-label"
                                for="remove-from-list">Remove winner from list</label><label
                                class="input--switch"><input type="checkbox" checked="true"
                                    id="remove-from-list"><span class="slider"></span></label></div>
                        <div class="input-group input-group--2-column"><label class="input-label"
                                for="enable-sound">Enable sound effect</label><label class="input--switch"><input
                                    type="checkbox" checked="true" id="enable-sound"><span
                                    class="slider"></span></label></div>
                    </div>
                    <div class="settings__panel__group"><button class="solid-button solid-button"
                            id="settings-save">Save</button><button class="solid-button solid-button--danger"
                            id="settings-close">Discard and close</button></div>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('draw-button').addEventListener('click', function() {
            if (document.getElementById('winner').value) {
                var csrf_token = "{{csrf_token()}}";
                $.ajax({
                    url: '{{route("admin.draw")}}',
                    type: 'POST',
                    data: {
                        _token: csrf_token,
                        winner: document.getElementById('winner').value
                    },
                    success: function(data) {
                        console.log(data);
                        // document.getElementById('winner').value = data;
                    }
                });
            }
        });
    });
</script>

</html>