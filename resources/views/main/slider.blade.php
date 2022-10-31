<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .carousel-item {
            background-image: url('assets/images/img_banner_new.png');
        }

        @media screen and (max-width:900px) {
            .carousel-item {
                background-image: url('assets/images/banner_mobile_01.png');
                height: 400px;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <section id="home" class="align-items-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></li>
                <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 1">
                </li>
                <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3">
                </li>
            </div>
            <div class="carousel-inner">
                <section class="carousel-item active bg" id="slide-1">
                    <section class="container-fluid text-slider"><br>
                        <span class="judul" style="font-family: polaris;">PT. Indosol Integriti Sistem,</span>
                        <section class="caption-slider">
                            <h2>is an end to end integrated</h2>
                            <h2>service company established</h2>
                            <h2>in 2015</h2>
                        </section>
                    </section>
                </section>
                <div class="carousel-item" id="slide-2">
                    <div class="container-fluid text-slider"><br>
                        <span class="judul" style="font-family: polaris;">PT. Indosol Integriti Sistem,</span>
                        <div class="caption-slider">
                            <h2>is an end to end integrated</h2>
                            <h2>service company established</h2>
                            <h2>in 2015</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" id="slide-3">
                    <div class="container-fluid text-slider"><br>
                        <span class="judul" style="font-family: polaris;">PT. Indosol Integriti Sistem,</span>
                        <div class="caption-slider">
                            <h2>is an end to end integrated</h2>
                            <h2>service company established</h2>
                            <h2>in 2015</h2>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="dots">
                    <label for="radio1" id="label1"></label>
                    <label for="radio2" id="label2"></label>
                </div> --}}
        </div>

    </section>
</body>

</html>
