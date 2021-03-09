@extends('layout.adminpage.app')

@section('content')
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6 class="m-0 font-weight-bold text-primary">Pengurus</h6>
                </div>
                <div>
                    <a href="/admin/create" class="btn btn-primary btn-sm">Add New <i class="fas fa-plus-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Nama Panggilan</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Departemen</th>
                            <th>Tugas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Nama Panggilan</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Departemen</th>
                            <th>Tugas</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        @forelse ($UserData as $row)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $row->nama_lengkap }}</td>
                                <td>{{ $row->nama_panggilan}}</td>
                                <td>{{ $row->email}}</td>
                                <td>{{ $row->role}}</td>
                                <td>Web Programmer</td>
                                <td>Membuat Web Dengan Simple</td>
                                <td width="10%">
                                    <a href="/admin/{{ $row->login_id}}/edit" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @empty
                            <div class="alert alert-warning" role="alert">
                                <h3 class="text-center"> No Data Found.</h3>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection