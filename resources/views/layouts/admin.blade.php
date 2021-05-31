<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Build a Career, Join Us - DSF Web Service')</title>
    <meta name="description" content="@yield('description', 'Join us and build a career at DSF Web Services! As a fast-growing digital company, we look for the best talent to grow and develop in a fast-paced environment.')">
    <meta name="keywords" content="@yield('keywords', 'career, DSF Web Services, IT company jakarta, IT vacancy, lowongan programmer, jobs programmer jogja 2021, jobs programmer jakarta 2021, product manager jogja, software developer jogja, cloud engineer jobs')">
    <link rel="canonical" href="{{ URL::current() }}" />
    @yield('og-meta')

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    @yield('load-styles')
</head>
<body>
    @include('components.admin.sidebar')
    @include('components.admin.topbar')

    <div class="app-content">
        @yield('content')
    </div>

    @stack('preload-scripts')
    <script src="{{ asset('/js/app.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
