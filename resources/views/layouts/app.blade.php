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

    <!-- vendor css -->
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slim.css') }}">

    <title>{{ isset($title) ? $title : env('APP_NAME') }}</title>
    {{-- @livewireScripts --}}
    @livewireChartsScripts

    @stack('styles')
    <style>
        .loader-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .bouncing-dots {
            display: flex;
            justify-content: space-between;
            width: 60px;
        }

        .dot {
            width: 15px;
            height: 15px;
            background-color: #4662d4;
            border-radius: 50%;
            animation: bounce 1.5s infinite;
        }

        .dot:nth-child(1) {
            animation-delay: 0s;
        }

        .dot:nth-child(2) {
            animation-delay: 0.3s;
        }

        .dot:nth-child(3) {
            animation-delay: 0.6s;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>

<body>

    <div id="xb-loadding">
        <div class="loader">
            <div class="plane">
                <img class="plane-img" src="{{ asset('assets/img/icon/plane.gif') }}" alt="">
            </div>
            <div class="earth-wrapper">
                <div class="earth"></div>
            </div>
        </div>
    </div>

    @livewire('components.header')

    @livewire('components.navbar')

    {{ $slot }}

    @livewire('components.footer')

    <script src="{{ asset('assets/lib/jquery/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery-ui/js/jquery-ui-1.12.1.js') }}"></script>
    <script src="{{ asset('assets/lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/lib/d3/js/d3.js') }}"></script>
    <script src="{{ asset('assets/lib/rickshaw/js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('assets/lib/Flot/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/lib/Flot/js/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/lib/peity/js/jquery.peity.js') }}"></script>

    <script src="{{ asset('assets/js/slim.js') }}"></script>
    <script src="{{ asset('assets/js/ResizeSensor.js') }}"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />

    @stack('scripts')

</body>

</html>
