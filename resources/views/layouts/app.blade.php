<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sistema de Evaluacion SiEvalua">
    <link rel="canonical" href="http://sievalua.zacatecas.gob.mx/sievalua">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Sistema de Evaluación Sievalua - Zacatecas">
    <meta property="og:description" content="Sistema de Evaluaciones Zacatecas">
    <meta property="og:url" content="http://sievalua.zacatecas.gob.mx/sievalua">
    <meta property="og:site_name" content="sievalua">
    <meta name="keywords" content="Sievalua, sievalua zacatecas, si evalua, evaluacion Zacatecas, Secretaría de la Función Pública del Estado de Zacatecas Sistema de Evaluación, Secretaría de la Función Pública Zacatecas Sistema de Evaluación,
    Función Pública Zacatecas Sistema de Evaluación al Desempeño">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Sistema  Evaluaciones Zacatecas">
    <meta name="twitter:title" content="Sistema Estatal de Evaluación Sievalua- Zacatecas">


    <title>Portal SiEvalúa</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/responsiveHome.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
    <!-- Hover Master -->
    <link rel="stylesheet" media="all" href="{{asset('hovermaster/css/hover.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick-theme.css')}}">
    <!-- Style css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>
<body>
    <div class="se-pre-con"></div>

    <div id="app">
        {{--@include('layouts.partials.header')--}}
        @include('layouts.partials.navbar')
        @yield('content')
    </div>
</body>

@include('layouts.partials.footer')


<script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('fontawesome/js/fontawesome.min.js')}}"></script>
<script src="{{ asset('fontawesome/js/all.min.js')}}"></script>
<script src="{{ asset('js/styles.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
{{-- Slick --}}
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
{{-- FRICONIX --}}
<script defer src="https://friconix.com/cdn/friconix-0.1070.js"></script>
{{-- amCharts --}}
<script src="{{asset('plugins/amcharts/charts.hs')}}"></script>
<script src="{{asset('plugins/amcharts/core.js')}}"></script>
<script src="{{asset('plugins/amcharts/themes/animated.js')}}"></script>
<script src="{{asset('plugins/amcharts/lang/es_ES.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152057462-1"></script>

{{-- <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
{{-- <script type="text/javascript">
    $(window).load(function() {
        // Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
	});
</script> --}}

@include('layouts.notificaciones')
<script type="text/javascript">
    $(function () {
        $("form").submit(function () {
            $("button").prop("disabled", true);
        });

        $('.custom-file-input').on('change', function(event) {
            var inputFile = event.currentTarget;
            $(inputFile).parent()
			.find('.custom-file-label')
			.html(inputFile.files[0].name);
        });
    });

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-152057462-1');

    </script>
@yield('script')
</html>






