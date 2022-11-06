@extends('crud.admin')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Clients</h1>
    <p class="mb-4">Data berikut akan tampil pada Landing page.</p>
    <button type="button" class="btn btn-primary"><a href="/create_client" class="text-light">+ Add Client</a></button><br><br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Clients</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <th class="col-md-1">{{ $data->id }}</th>
                                <td><img class="swiper-slide" style="width: 70px"
                                        src="{{ asset('uploads/logo_client/' . $data->logo_client) }}" alt="logo"></td>
                                <td class="col-md-1">
                                    <a href="/delete_client/{{ $data->id }}" class="btn btn-icon btn-danger delete"><i
                                            class="fa fa-trash"></i></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
