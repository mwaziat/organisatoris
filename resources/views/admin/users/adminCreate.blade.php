@extends('layout.adminpage.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <!-- Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Harap isi data dengan benar</h6>
                    <a href="/admin" class="btn btn-sm btn-primary">Data Pengurus <i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="card-body">
                    <form action="/admin/update/" method="POST" id="creatAdmin">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="fullName">Nama Lengkap</label>
                            <div class="input-group">
                                <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Nama Lengkap">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary text-light"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                            @error('fullName')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nickName">Nama Panggilan</label>
                            <input type="text" name="nickName" class="form-control" id="nickName" placeholder="Nama Panggilan" readonly>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" readonly>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        {{-- <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passwordConf">Konfimasi Password</label>
                                <input type="password" name="passwordConf" class="form-control" id="passwordConf" placeholder="Konfirmasi Password">
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="role">Akses Level</label>
                            <select name="role" class="form-control" id="role">
                                <option value=""> --- Pilih Role ---</option>
                                @foreach ($roleData as $item)
                                <option value="{{$item->role_id}}">{{$item->role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            @if (session()->has('success'))    
                <div class="alert alert-success fade show" role="alert">
                    <strong>Berhasil!</strong> {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scriptjs')
    <script src="{{ asset('adminpage/custom/js/users/admin.js') }}"></script>
@endsection