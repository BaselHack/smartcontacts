<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Site Description Here">


    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/socicon.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/flickity.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/iconsmind.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/jquery.steps.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-frankruhl-firasans.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,700%7CFrank+Ruhl+Libre:300,400" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-82376109-7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-82376109-7');
    </script>



</head>
<body class=" ">





@yield('content')







<!--<div class="loader"></div>-->
<a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
    <i class="stack-interface stack-up-open-big"></i>
</a>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/flickity.min.js') }}"></script>
<script src="{{ asset('js/easypiechart.min.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/typed.min.js') }}"></script>
<script src="{{ asset('js/datepicker.js') }}"></script>
<script src="{{ asset('js/isotope.min.js') }}"></script>
<script src="{{ asset('js/ytplayer.min.js') }}"></script>
<script src="{{ asset('js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/granim.min.js') }}"></script>
<script src="{{ asset('js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('js/countdown.min.js') }}"></script>
<script src="{{ asset('js/twitterfetcher.min.js') }}"></script>
<script src="{{ asset('js/spectragram.min.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>