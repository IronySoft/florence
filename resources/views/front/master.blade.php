<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stuff Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('/')}}front/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/style.css">

    <!-- Modernizr JS -->
    <script src="{{asset('/')}}front/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('/')}}front/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    @include('front.includes.header.header')


    @yield('body')

    <div id="colorlib-instagram">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
                <h2>Instagram</h2>
            </div>
        </div>
        <div class="row">
            <div class="instagram-entry">
                @foreach($students as $row)
                    <a href="#" class="instagram text-center"
                       style="background-image: url({{asset($row->image)}});">
                    </a>
                @endforeach

                <a href="#" class="instagram text-center"
                   style="background-image: url({{asset('/')}}front/images/gallery-2.jpg);">
                </a>
                <a href="#" class="instagram text-center"
                   style="background-image: url({{asset('/')}}front/images/gallery-3.jpg);">
                </a>
                <a href="#" class="instagram text-center"
                   style="background-image: url({{asset('/')}}front/images/gallery-4.jpg);">
                </a>
                <a href="#" class="instagram text-center"
                   style="background-image: url({{asset('/')}}front/images/gallery-5.jpg);">
                </a>
                <a href="#" class="instagram text-center"
                   style="background-image: url({{asset('/')}}front/images/gallery-6.jpg);">
                </a>
                <a href="#" class="instagram text-center"
                   style="background-image: url({{asset('/')}}front/images/gallery-7.jpg);">
                </a>
                <a href="#" class="instagram text-center"
                   style="background-image: url({{asset('/')}}front/images/gallery-8.jpg);">
                </a>
            </div>
        </div>
    </div>
    @include('front.includes.footer')


</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('/')}}front/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{asset('/')}}front/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{asset('/')}}front/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('/')}}front/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="{{asset('/')}}front/js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="{{asset('/')}}front/js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('/')}}front/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}front/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="{{asset('/')}}front/js/main.js"></script>

</body>
</html>

