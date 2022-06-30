<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title') - FusionApp</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon.png')}}">
    <!-- FontAwesome icons -->
    <link href="{{mix('css/fontawesome.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
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
    <script src="{{mix('js/app.js')}}"></script>
</body>

</html>