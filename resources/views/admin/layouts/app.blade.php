<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " 
dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.layouts.includes.head')
</head>
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      @include('admin.layouts.includes.sidebar')
      <div class="layout-page">
        @include('admin.layouts.includes.navbar')
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            @yield('content')
          </div>
          @include('admin.layouts.includes.footer')
        </div>
      </div>
    </div>
  </div>
</body>
@include('admin.layouts.includes.footer_scripts')
@include('admin.includes.scripts')
</html>