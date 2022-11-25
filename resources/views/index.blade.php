<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Indosol</title>
    <link rel="shortcut icon" href="assets/images/img_indosol_logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Stye CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    {{-- aos animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>


<body>
    <!-- //start: Navbar Section -->
    @include('main.navbar')
    <!-- //end: Navbar Section -->

    {{-- @yield('content') --}}

    <!-- //start: slider -->
    @include('main.slider')
    <!-- //end: slider -->

    <!-- //start: value -->
    @include('main.value')
    <!-- //end: value -->

    <!-- //start: who_we_are -->
    @include('main.who_we_are')
    <!-- //end: who_we_are -->

    <!-- //start: what_we_do -->
    @include('main.what_we_do')
    <!-- //end: what_we_do -->

    <!-- //start: client -->
    @include('main.client')
    <!-- //end: client -->

    <!-- //start: talk_to_us -->
    @include('main.talk_to_us')
    <!-- //end: talk_to_us -->

    <a href="https://wa.me/6281334788231">
        <img class="floating" style="margin-top: 16px;" src="assets/images/floating_button_whatsapp.png" alt="whatsapp">
    </a>

    {{-- START FOOTER --}}
    <footer style="background-color: #0354A4; padding:1.8%">
        <div class=" text-center">
            <h5 style="align-items: center; color: #FFFFFF; font-family:josefin; border:none">Copyright © 2022 PT.
                Indosol Integriti
                Sistem - All Rights Reserved</h5>
        </div>
    </footer>
    <!-- //* Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" async></script>
    <!-- //* JQuery -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- //* Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    {{-- swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    {{-- aos animation  --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
