<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="POS - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">

        <title>Admin - @yield('title')</title>

        {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}"> --}}

        <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">

        <link rel="stylesheet" href="{{asset('assets2/css/dataTables.bootstrap4.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets2/plugins/toastr/toatr.css')}}">


        <link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/all.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">

</head>

<body>

    @if (Session::has('flash_message_error'))
    <script type="text/javascript" src="{{asset('assets2/js/sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript">;
    Swal.fire({
    position: 'center',
    icon: 'error',
    title: "{{ session('flash_message_error') }}",
    showConfirmButton: false,
    timer: 5000
    });
    </script>
    @endif
    @if (Session::has('flash_message_success'))
    <script type="text/javascript" src="{{asset('assets2/js/sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript">;
    Swal.fire({
    position: 'center',
    icon: 'success',
    title: "{{ session('flash_message_success') }}",
    showConfirmButton: false,
    timer: 5000
    });
    </script>
@endif

    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

            @include('layouts.header')

            @include('layouts.sidebar')

            <div class="page-wrapper">

                <div class="content">
                    @yield('content')
                </div>

            </div>

    </div>


<script src="{{asset('assets2/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets2/js/feather.min.js')}}"></script>

<script src="{{asset('assets2/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets2/js/script.js')}}"></script>

<script src="{{asset('assets2/js/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('assets2/js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('assets2/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('assets2/plugins/apexchart/apexcharts.min.js')}}"></script>

<script src="{{asset('assets2/plugins/apexchart/chart-data.js')}}"></script>

<script src="{{asset('assets2/plugins/toastr/toastr.min.js')}}"></script>

<script src="{{asset('assets2/plugins/toastr/toastr.js')}}"></script>

<script type="text/javascript" src="{{asset('assets2/js/sweetalert2.all.min.js')}}"></script>

<script src="{{asset('assets2/js/sweetalert2.all.js')}}"></script>


</body>
</html>