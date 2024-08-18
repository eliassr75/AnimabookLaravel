<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>@yield('title', 'Título Padrão')</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords"
          content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset('__manifest.json') }}">

    @stack('styles')
</head>

<body>

<!-- loader -->
<div id="loader">
    <img src="{{ asset('assets/img/loading-icon.png') }}" alt="icon" class="loading-icon">
</div>
<!-- * loader -->

@include('components.app_header')

<!-- App Capsule -->
<div id="appCapsule">

    @yield('content')
    @include('components.app_footer')

</div>
<!-- * App Capsule -->

@include('components.app_bottom_menu')
@include('components.app_sidebar')
@include('components.app_add_home')
@include('components.app_cookies')

<!-- ========= JS Files =========  -->
<!-- Bootstrap -->
<script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- Splide -->
<script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>
<!-- Base Js File -->
<script src="{{ asset('assets/js/base.js') }}"></script>

@stack('scripts')

<script>
    // Add to Home with 2 seconds delay.
    AddtoHome("2000", "once");
</script>

</body>

</html>
