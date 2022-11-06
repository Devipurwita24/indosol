<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/client.css') }}">
    <title>Document</title>
</head>

<body>
    <section id="client" style="height: 100%">
        <center>
            <div class="card card-value  shadow-lg bg-body rounded">
                <H1 class="header-client text-center">Clients</H1>
                <div class="swiper">
                    <div class=" mySwiper">
                        <div class="swiper-wrapper"> 
                            @foreach ($data as $value)
                                <img class="swiper-slide" width="10px"
                                    src="{{ asset('uploads/logo_client/' . $value->logo_client) }}" alt="logo">
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </center>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 5,
                spaceBetween: 2,
                loop: false,
                centerSlide: false,
                fade: 'true',
                grabCursor: 'true',
                // pagination: {
                //     el: ".swiper-pagination",
                //     clickable: false,
                // },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
    </section>
</body>

</html>
