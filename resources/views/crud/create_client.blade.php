<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Homepage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Stye CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>


<body class="container my-5 ">
    <!-- //start: Navbar Section -->
    {{-- @include('main.navbar') --}}
    <!-- //end: Navbar Section -->

    <center>
        <h2 class="text-center"
            style="font-family: 'josefin';font-style: normal;font-weight: 900;line-height: 43px;color: #010c0f;">
            Silakan Isi Data Client Dibawah Ini
        </h2>
    </center>
    <br>

    <div class="card_body">
        <form action="{{ route('store_client') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama Client</label><label style="color: #E1493F;">*</label>
                <input type="text" class="form-control" name="nama_client">
            </div><br>
            <div class="">
                <label for="image">Masukkan Logo Client</label><label style="color: #E1493F;">*</label>
                <input class="form-control" type="file" id="logo_client" name="logo_client">
            </div>
    </div>

    <br><br>
    <button class="btn btn-primary mt-4 mb-4" type="submit">Tambah</button>
    <button class="btn btn-secondary mt-4 mb-4" type="reset">Reset</button>
    </form>

    </div>
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
</body>

</html>
