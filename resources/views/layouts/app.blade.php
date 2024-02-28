<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SPK Karyawan IT Telkom Purwokerto </title>
    <link rel="icon" href="{{ asset('assets/images/logoittp.ico') }}" type="image/x-icon"/>

    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('includes.style')


</head>

<body>

    @include('includes.navbar')

    @include('includes.hero-section')

    @yield('content')

    @include('includes.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('includes.script')

</body>

</html>
