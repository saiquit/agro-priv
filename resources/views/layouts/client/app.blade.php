<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - Agro Private Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('keywords')" name="keywords">
    <meta content="@yield('description')" name="description">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{App\Models\Setting::getValue('site_favicon') ?  url('/storage/' . App\Models\Setting::getValue('site_favicon')) : 'favicon.ico'}}">
    {{--
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> --}}
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --}}

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    @stack('css')
    <!-- Template Stylesheet -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{--
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet"> --}}
</head>

<body>
    {{-- @include('layouts.client.partials.maintenance') --}}
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar  -->
    @include('layouts.client.partials.navbar')

    <!-- Modal Search Start -->
    {{-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text btn border p-3"><i
                                class="fa fa-search text-white"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Modal Search End -->

    @yield('content')
    <!-- Footer Start -->
    @include('layouts.client.partials.footer')
    <!-- Footer End -->

    @include('layouts.client.partials.copyright')

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    {{-- <script src="{{ asset('/assets/js/main.js') }}"></script> --}}
    @stack('js')
</body>

</html>