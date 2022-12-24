<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets/img/AgrofarmIcon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.navbar')
    <!-- Navbar End -->

    <!-- Content Start -->
    @yield('content')
    <!-- Content End -->



    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>

    <div id="whatsbutton"></div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="{{asset('wa/dist/js/jquery.whatsbutton.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('wa/dist/css/whatsbutton.min.css')}}">

    @include('sweetalert::alert')



</body>
<script>
    $(document).ready(function() {
        $('#whatsbutton').whatsbutton({
            position: "left",
            name: "AGRO COFFEE",
            avatar: "/assets/img/AgrofarmIcon.png",
            status: "online",
            messages: ["Hello there, welcome to Agrofarm Globalindo Investama. How can we help you ? 😀"],
            placeholder: "Type here...",
            defaultMessage: "Hello, I want to get information about the products.",
            phone: "+6285733519756",
        });
    });
</script>

</html>