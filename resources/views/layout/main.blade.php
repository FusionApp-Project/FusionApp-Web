<!DOCTYPE html>
<html dir="ltr" lang="@lang('main.language_identifier')">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title') - FusionApp</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon.png')}}">
    <!-- FontAwesome icons -->
    <script src="https://kit.fontawesome.com/4e658c380b.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    @vite(["resources/css/app.css"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @yield('header')
        @yield('sidebar')
        <div class="page-wrapper" style="min-height: 250px;">
            @yield('page_header')
            <div class="container-fluid">
                @yield('content')
            </div>
            @yield('footer')
        </div>
    </div>
    @vite(["resources/js/app.js"])
</body>
</html>
