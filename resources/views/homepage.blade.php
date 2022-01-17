<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ secure_asset('frontend/img/fav-icon.png') }}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="{{ secure_asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet"> 
        <link href="{{ secure_asset('frontend/vendors/linearicons/style.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('frontend/vendors/flat-icon/flaticon.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ secure_asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{ secure_asset('frontend/vendors/revolution/css/settings.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('frontend/vendors/revolution/css/layers.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('frontend/vendors/revolution/css/navigation.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('frontend/vendors/animate-css/animate.css') }}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{ secure_asset('frontend/vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('frontend/vendors/magnifc-popup/magnific-popup.css') }}" rel="stylesheet">
        
        <link href="{{ secure_asset('frontend/css/style.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('frontend/css/responsive.css') }}" rel="stylesheet">

        @yield('head')

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Main Header Area =================-->
		@include('body.header') 
        <!--================End Main Header Area =================-->
        
        <!--================Slider Area =================-->
        @include('body.main_slider_area')
        <!--================End Slider Area =================-->
        
        <!--================Welcome Area =================-->
        @yield('main')
        <!--================End Welcome Area =================-->
        
        <!--================Special Recipe Area =================-->
        @yield('SpecialRecipe')
        <!--================End Special Recipe Area =================-->
        
        <!--================Service Area =================-->
        @yield('serviceArea')
        <!--================End Service Area =================-->
        
        <!--================Discover Menu Area =================-->
        @yield('discoverMenu')
        <!--================End Discover Menu Area =================-->
        
        <!--================Client Says Area =================-->
        @yield('clientSays')
        <!--================End Client Says Area =================-->
        
        <!--================Latest News Area =================-->
        @yield('latestNew')
        <!--================End Latest News Area =================-->
        
        <!--================Newsletter Area =================-->
        @include('body.newsletter')
        <!--================End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
        @include('body.footer')
        <!--================End Footer Area =================-->
        
        
        <!--================Search Box Area =================-->
        @include('body.search')
        <!--================End Search Box Area =================-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ secure_asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ secure_asset('frontend/js/popper.min.js') }}"></script> 
        <script src="{{ secure_asset('frontend/js/bootstrap.min.js') }}"></script>
        <!-- Rev slider js -->
        <script src="{{ secure_asset('frontend/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <!-- Extra plugin js -->
        <script src="{{ secure_asset('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/magnifc-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/datetime-picker/js/moment.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ secure_asset('frontend/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        
        <script src="{{ secure_asset('frontend/js/theme.js') }}"></script>
    </body>

</html>