<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.includes.head')
</head>

<body>

    <div id="loading-icon-bx">
        <div class="loader"></div>
    </div>

    <div class="page-wraper">

        @yield('content')

    </div>

    @include('auth.includes.script')

</body>

</html>
