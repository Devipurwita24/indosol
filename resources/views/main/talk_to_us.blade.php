<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/talk_to_us.css') }}">
    <title>Document</title>
</head>
<body>
    <section id="talk_to_us" data-aos="fade-up" data-aos-duration="1500">
        <div class="card card-ttu rounded-0" style="background-image: url('assets/images/img_banner_talk_to_us.png'); background-size:cover; background-position: center;border: none" >
            <div class="container-fluid content-ttu text-light">
                <div class="row content-ttu">
                    <div class="col-md-6">
                        <h1 class="text-center header-ttu">Talk To Us</h1>
                        <form action="{{ route('store_talk_to_us') }}" method="POST">
                            @csrf
                            <div class="mb-3 mx-5">
                                <input class="form-control-lg" name="first_name" type="text" placeholder="First Name*">
                            </div>
                            <div class="mb-3 mx-5">
                                <input class="form-control-lg" name="last_name" type="text" placeholder="Last Name*">
                            </div>
                            <div class="mb-3 mx-5">
                                <input class="form-control-lg" name="email" type="text" placeholder="Email*">
                            </div>
                            <div class="mb-3 mx-5">
                                <input class="form-control-lg" name="phone_number" type="text" placeholder="Phone Number*">
                            </div>
                            <div class="mb-3 mx-5">
                                <textarea class="form-control-lg" name="messege" id="exampleFormControlTextarea1" placeholder="Message (Optional)"
                                    rows="5"></textarea>
                            </div>
                            <button
                                class="button-send text-center d-grid gap-2 col-4 mx-auto" type="sumbit"> Send
                                Inquiry</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="content-pt">
                            <h2 style="font-weight: 100;">PT. Indosol Integriti Sistem </h2>
                            <h3>Ruko Victorian No. D3 </h3>
                            <h3>Jalan Bintaro Utama 3A, Bintaro Jaya </h3>
                            <h3>Tanggerang Selatan - 15225, Indonesia</h3>
                            <h4><img src="assets/images/fluent_call-24-filled.png" alt="">&nbsp;+62 (21) 7341 876
                            </h4>
                            <h4><img src="assets/images/ic_round-email.png" alt="">&nbsp;info@indosolution.co.id
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>