<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="robots" content="noindex, nofollow">
        <title>Admin - @yield('title')</title>
        {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}"> --}}
        <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/plugins/select2/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/plugins/summernote/summernote-bs4.min.css')}}">
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
    timer: 100000
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
    timer: 100000
    });
    </script>
@endif

    <div id="global-loader">
        <div class="whirly-loader"></div>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtenez tous les liens de la barre de navigation
            var navLinks = document.querySelectorAll('.navb a');
    
            // Parcourir tous les liens
            navLinks.forEach(function(link) {
                // Ajoutez un écouteur d'événement pour le clic sur chaque lien
                link.addEventListener('click', function(event) {
                    // Supprimez la classe "active" de tous les liens
                    navLinks.forEach(function(navLink) {
                        navLink.classList.remove('active');
                    });
                    
                    // Ajoutez la classe "active" au lien cliqué
                    link.classList.add('active');
                      
                    // Mettez à jour l'URL dans la barre d'adresse sans rechargement de la page
                    history.pushState(null, null, link.href);
                    
                    // Appliquez le style CSS à la classe "active"
                     applyActiveLinkStyle();
                });
            });
    
            // Appliquez le style CSS au lien actif lors du chargement initial de la page
            applyActiveLinkStyle();
    
            // Fonction pour appliquer le style CSS à la classe "active"
            function applyActiveLinkStyle() {
                // Obtenez l'URL actuelle
                var currentUrl = window.location.pathname;
    
                // Parcourir tous les liens
                navLinks.forEach(function(link) {
                    // Vérifiez si l'URL du lien correspond à l'URL actuelle
                    if (link.getAttribute('href') === currentUrl) {
                        // Ajoutez la classe "active" au lien correspondant à l'URL actuelle
                        link.classList.add('active');
                    } else {
                        // Supprimez la classe "active" des autres liens
                        link.classList.remove('active');
                    }
                });
            }
        });
    </script> 


<script src="{{asset('assets2/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets2/js/feather.min.js')}}"></script>
{{-- <script src="{{asset('assets2/js/bootstrap-datetimepicker.min.js')}}"></script> --}}
<script src="{{asset('assets2/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets2/js/script.js')}}"></script>
<script src="{{asset('assets2/js/moment.min.js')}}"></script>
<script src="{{asset('assets2/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets2/plugins/select2/js/custom-select.js')}}"></script>
<script src="{{asset('assets2/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets2/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets2/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets2/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets2/js/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets2/js/sweetalert2.all.js')}}"></script>

</body>
</html>