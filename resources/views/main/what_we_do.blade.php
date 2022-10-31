<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Stye CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/what_we_do.css') }}">
    <title>what_we_do</title>
</head>

<body>
    <section id="what_we_do" data-aos="fade-right" data-aos-duration="2000">
        <h1 data-aos="fade-right" class="my-3 text-center header-wwd">
            What We Do ?
        </h1>
        {{-- <aside style="font-weight: 500;font-family:josefin; color: #4D4D4F;padding:2%">
            <div class="main-content">
                <div class="aside-left ">
                    <p data-aos="fade-right" data-aos-duration="2000" class="mb-3 font-blue">Engineering</p>
                    <p data-aos="fade-right" data-aos-duration="2000" class="mb-3 font-blue">Geomatic Survey</p>
                    <p data-aos="fade-right" data-aos-duration="2000" class="mb-3 font-blue">Geotechnical survey</p>
                    <p data-aos="fade-right" data-aos-duration="2000" class="mb-3 font-blue">Pumping Service</p>
                    <p data-aos="fade-right" data-aos-duration="2000" class="mb-3 font-blue">Underwater Inspection</p>
                    <p data-aos="fade-right" data-aos-duration="2000" class="mb-3 font-blue">Advance Inpection</p>
                </div>
                <div data-aos="fade-right" data-aos-duration="2000" class="aside-center">
                    <p data-aos="fade-right" data-aos-duration="2000" class="mb-2" data-aos="fade-right" >Land Survey</p>
                    <p data-aos="fade-right" data-aos-duration="2000" class="mb-2" data-aos="fade-right" >Aerial Survey</p>
                    <p data-aos="fade-right" data-aos-duration="2000" class="mb-2" data-aos="fade-right" >Hydrographic Survey</p>
                </div>
                <div data-aos="fade-right" data-aos-duration="2000" class="aside-right">
                    <img data-aos="fade-right" data-aos-duration="2000" class="font-blue-center" src="assets/images/img_survey.png" width="78%" alt="">
                </div>
            </div>
        </aside> --}}
        <div class="container-wwd">
            <div class="content-list">
                <input type="radio" name="indicator" checked id="list1">
                <input type="radio" name="indicator" id="list2">
                <input type="radio" name="indicator" id="list3">
                <input type="radio" name="indicator" id="list4">
                <input type="radio" name="indicator" id="list5">
                <input type="radio" name="indicator" id="list6">

                <div class="list">
                    <label for="list1" class="list1">
                        <p data-aos="fade-right">Engineering</p>
                    </label>
                    <label for="list2" class="list2">
                        <p data-aos="fade-right">Geomatic Survey</p>
                    </label>
                    <label for="list3" class="list3">
                        <p data-aos="fade-right">Geotechnical survey</p>
                    </label>
                    <label for="list4" class="list4">
                        <p data-aos="fade-right">Pumping Service</p>
                    </label>
                    <label for="list5" class="list5">
                        <p data-aos="fade-right">Underwater Inspection</p>
                    </label>
                    <label for="list6" class="list6">
                        <p data-aos="fade-right">Advance Inpection</p>
                    </label>
                    <div class="indicator indicator-list"></div>
                </div>
                <div class="text-content">
                    <div class="list1 text">
                        <div class="col-md-6" style="float: left">
                            <p class="mb-2" data-aos="fade-right" >1Land Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Aerial Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Hydrographic Survey</p>
                        </div>
                        <div class="col-md-6" style="float: right">
                            <img src="assets/images/img_survey.png" width="640px" height="310px" alt="">
                        </div>
                    </div>

                    <div class="list2 text">
                        <div class="col-md-6" style="float: left">
                            <p class="mb-2" data-aos="fade-right" >2Land Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Aerial Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Hydrographic Survey</p>
                        </div>
                        <div class="col-md-6" style="float: right">
                            <img src="assets/images/img_survey2.png" width="640px" height="310px" alt="">
                        </div>
                    </div>
                    <div class="list3 text">
                        <div class="col-md-6" style="float: left">
                            <p class="mb-2" data-aos="fade-right" >3Land Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Aerial Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Hydrographic Survey</p>
                        </div>
                        <div class="col-md-6" style="float: right">
                            <img src="assets/images/img_survey.png" width="640px" height="310px" alt="">
                        </div>
                    </div>
                    <div class="list4 text">
                        <div class="col-md-6" style="float: left">
                            <p class="mb-2" data-aos="fade-right" >4Land Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Aerial Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Hydrographic Survey</p>
                        </div>
                        <div class="col-md-6" style="float: right">
                            <img src="assets/images/img_survey2.png" width="640px" height="310px" alt="">
                        </div>
                    </div>
                    <div class="list5 text">
                        <div class="col-md-6" style="float: left">
                            <p class="mb-2" data-aos="fade-right" >5Land Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Aerial Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Hydrographic Survey</p>
                        </div>
                        <div class="col-md-6" style="float: right">
                            <img src="assets/images/img_survey.png" width="640px" height="310px" alt="">
                        </div>
                    </div>
                    <div class="list6 text">
                        <div class="col-md-6" style="float: left">
                            <p class="mb-2" data-aos="fade-right" >6Land Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Aerial Survey
                            </p>
                            <p class="mb-2" data-aos="fade-right" >Hydrographic Survey</p>
                        </div>
                        <div class="col-md-6" style="float: right">
                            <img src="assets/images/img_survey2.png" width="640px" height="310px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
