@extends('layout.login.app')

@section('content')
<div class="content-login">
    <div class="box-login">
        <div class="box-content">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="jumbotron jumbotron-login jumbotron-fluid">
                    <div class="container">
                        <div class="head-login">
                            <div class="mt-auto ligin-logo"><i class="logo fas fa-user"></i></div>
                            <h3 class="login-title text-center text-light mb-5">Login</h3>
                        </div>
                        <div class="body-login">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-light">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-light">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label text-light" for="exampleCheck1">Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-outline-light float-right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection