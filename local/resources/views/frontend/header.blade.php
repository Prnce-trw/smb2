    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('smb-frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('smb-frontend/css/animate.css')}}">
    <link href="{{asset('smb-frontend/1/ninja-slider.css')}}" rel="stylesheet" type="text/css" />
    
    <!--JS-->
    <script src="{{asset('smb-frontend/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('smb-frontend/js/jquery.min.js')}}"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Flex Slider-->
    <link rel="stylesheet" href="{{asset('smb-frontend/flexslider/flexslider.css')}}" type="text/css" media="screen">
    {{-- <script defer="" src="{{asset('smb-frontend/flexslider/jquery.flexslider.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('smb-frontend/flexslider/js/shCore.js')}}"></script>
    <script type="text/javascript" src="{{asset('smb-frontend/flexslider/js/shBrushJScript.js')}}"></script>
    <script src="{{asset('smb-frontend/flexslider/js/modernizr.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('smb-frontend/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('smb-frontend/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}" />

    <link href="{{asset('smb-frontend/1/ninja-slider.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('smb-frontend/1/ninja-slider.js')}}" type="text/javascript"></script>

    <link rel="icon" href="{{asset('smb-frontend/images/favicon.ico')}}">
    <script src="{{asset('smb-frontend/js/wow.min.js')}}"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script>
        new WOW().init();
    </script>