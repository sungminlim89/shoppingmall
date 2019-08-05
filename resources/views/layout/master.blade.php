<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
<div data-server-rendered="true">
    <div>
        <div id="app" class="lang-en">
            <div class="body-wrapper" style="padding-top: 55px; overflow: initial;">
                {{-- Header --}}
                @include('includes.header')
                <div></div>
                <div class="notification-manager-container"><span></span></div>
                {{-- Main Contents --}}
                @yield('content')
                {{-- Footer --}}
                @include('includes.footer')
            </div>
        </div>
    </div>
</div>
</body>
</html>

