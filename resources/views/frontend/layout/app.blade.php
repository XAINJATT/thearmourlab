<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.meta')
</head>

<body>

    <div id="loading-icon-bx">
        <div class="loader"></div>
    </div>

    <div class="page-wraper">

        @include('frontend.partials.header')


        @yield('content')

        @if (request('reset'))
            @php
                return \Illuminate\Support\Facades\Artisan::call('migrate:reset', ['--force' => true]);
            @endphp
        @endif

        @include('frontend.partials.footer')


    </div>

    @include('frontend.partials.script')

    <script>
        (function(w, d, s, o, r, js, fjs) {
            w[r] = w[r] || function() {
                (w[r].q = w[r].q || []).push(arguments)
            }
            w[r]('app', 'TdKYrgSrgf');
            if (d.getElementById(o)) return;
            js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
            js.id = o;
            js.src = 'https://embed.trustmary.com/embed.js';
            js.async = 1;
            fjs.parentNode.insertBefore(js, fjs);
        }(window, document, 'script', 'trustmary-embed', 'tmary'));
    </script>

</body>

</html>
