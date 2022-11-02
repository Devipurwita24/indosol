
@extends('cms.admin')
@section('content')

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
                <div class="">
                    <label for="image">Masukkan Logo Client</label><label style="color: #E1493F;">*</label>
                    <input class="form-control" type="file" id="logo_client" name="logo_client">
                </div>
        </div>

        <br><br>
        <button class="btn btn-primary mt-4 mb-4" type="submit">Tambah</button>
        <button class="btn btn-secondary mt-4 mb-4" type="reset">Reset</button>
        </form>

        
@endsection

