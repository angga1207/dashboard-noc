<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @stack('meta_tags')
    {{--
    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ isset($title) ? $title : env('APP_NAME') }}">
    <meta name="twitter:description" content="{{ isset($title) ? $title : env('APP_NAME') }}">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="{{ isset($title) ? $title : env('APP_NAME') }}">
    <meta property="og:description" content="{{ isset($title) ? $title : env('APP_NAME') }}">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> --}}

    <!-- Meta -->
    <meta name="description" content="{{ isset($title) ? $title : env('APP_DESCRIPTION') }}">
    <meta name="author" content="PUSDATIN | DISKOMINFO KABUPATEN OGAN ILIR">

    <!-- Vendor css -->
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slim.css') }}">

    <title>{{ isset($title) ? $title : env('APP_NAME') }}</title>

    @stack('styles')
</head>

<body class="bg-utama">

    {{ $slot }}

    <script src="{{ asset('assets/lib/jquery/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery-ui/js/jquery-ui-1.12.1.js') }}"></script>
    <script src="{{ asset('assets/lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.js') }}"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />

    @stack('scripts')

</body>

</html>
