@extends('crud.admin')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Talk To Us</h1>
    <p class="mb-4">Data berikut hanya tampil pada CMS.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Talk To Us</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th class="col-md-5">Message</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <th class="col-md-1">{{ $data->id }}</th>
                                <td>{{ $data->first_name }}</td>
                                <td>{{ $data->last_name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->messege }}</td>
                                <td>{{ date('d F Y H:i:s', strtotime($data->created_at)) }}</td>
                                <td>
                                    <center>
                                        <a href="/delete_talk/{{ $data->id }}"
                                            class="btn btn-icon btn-danger delete"><i class="fa fa-trash"></i>
                                        </a>
                                    </center>

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
