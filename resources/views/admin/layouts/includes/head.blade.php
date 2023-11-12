<meta charset="utf-8" />
<meta
  name="viewport"
  content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
/>
<meta name="author" content="" />

<title>{{\App\Helpers\SiteHelper::settings()['PageTitle']}}</title>

<meta name="description" content="{{\App\Helpers\SiteHelper::settings()['PageTitle']}}" />

<!-- DataTables -->
<link href="{{ asset('backend/plugins/datatable/datatables.min.css') }}" rel="stylesheet" type="text/css" />

<!-- SweetAlert CSS -->
<link rel="stylesheet" href="{{asset('backend/plugins/sweetalert2/sweetalert2.min.css')}}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet"
/>

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

<!-- Vendors CSS -->

<link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

<link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

<!-- Page CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/select2/select2.min.css')}}" />
<!-- Helpers -->
<script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{asset('assets/js/config.js')}}"></script>

<!-- Datatable --> 
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables/css/datatables.min.css')}}">

<!-- Select2 --> 
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/css/select2.min.css')}}">

<!-- FontAwesome --> 
<link rel="stylesheet" href="{{asset('assets/vendor/libs/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/fontawesome/css/fontawesome.min.css')}}">

    <!-- Signature -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.signature.css')}}">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <!-- Signature -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{asset('assets/js/jquery.signature.js')}}"></script>
    <!-- <script src="{{asset('assets/js/jquery.signature.min.js')}}"></script> -->
    <script>
      $(function() {
        var sig = $('#sig').signature();
        $('#disable').click(function() {
          var disable = $(this).text() === 'Disable';
          $(this).text(disable ? 'Enable' : 'Disable');
          sig.signature(disable ? 'disable' : 'enable');
        });
        $('#clear').click(function() {
          sig.signature('clear');
        });
        $('#json').click(function() {
          alert(sig.signature('toJSON'));
        });
        $('#svg').click(function() {
          alert(sig.signature('toSVG'));
        });
      });

      $(function() {
        var sign = $('#sign').signature();
        $('#sign_disable').click(function() {
          var disable = $(this).text() === 'Disable';
          $(this).text(disable ? 'Enable' : 'Disable');
          sign.signature(disable ? 'disable' : 'enable');
        });
        $('#sign_clear').click(function() {
          sign.signature('clear');
        });
        $('#json').click(function() {
          alert(sign.signature('toJSON'));
        });
        $('#svg').click(function() {
          alert(sign.signature('toSVG'));
        });
      });
    </script>