<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title.' | '.$webTitle}}</title>
    <link rel="stylesheet" href="{{ asset('adminpage/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminpage/vendor/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminpage/custom/custom.css')}}">
</head>
<body>

    @yield('content')

</body>
</html>