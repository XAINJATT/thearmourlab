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

</body>

</html>
