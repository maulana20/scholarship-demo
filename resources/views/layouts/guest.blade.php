<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Scholarship Demo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" media="screen">
</head>
<body>
    <div class="wrapper">
        <!-- Page Content  -->
        <div id="content-full">
                @yield('content')
        </div>
    </div>
</body>

<script src="{{ asset('/js/app.js') }}"></script>
@yield('script')
</html>
