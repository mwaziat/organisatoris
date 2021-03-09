<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title.' | '.$webTitle}}</title>
    @include('layout.adminpage.stylesheet')
    @section('css')
    @show
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layout.adminpage.navigation')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layout.adminpage.header')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End Main Content -->
            @include('layout.adminpage.footer')
        </div>
        <!-- End Content Wrapper -->
    </div>
    <!-- End page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('layout.adminpage.script')
</body>
</html>