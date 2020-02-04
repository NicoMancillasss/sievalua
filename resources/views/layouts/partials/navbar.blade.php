
<div class="navbar navbar-expand-md navbar-light bg-white shadow-sm d-flex justify-content-between">
    <div class="container w-auto h-25">
        <img src="{{asset('imagenes/zacatecas.png')}}" class="w-25 h-25 ml-5">
        <img src="{{asset('imagenes/SIEVALUA-horizontal.png')}}" class="w-25 h-50 mr-5">
    </div>
</div>
<header class="sticky-top">
    <nav class=" navbar navbar-expand-lg navbar-dark  position-relative fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div  class="container w-auto">
            <div  class="collapse navbar-collapse" id="basicExampleNav">
                <ul id="navbarH" class="navbar-nav mr-auto">
                    <li class="nav-item activate">
                        <a class="nav-link text-light hvr-underline-reveal" href="{{route('portal.home')}}">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light hvr-underline-reveal" data-hover="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            Evaluación

                        </a>
                        <div class="dropdown-menu text-light " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item hvr-underline-from-left" href="{{route('evaluaciones')}}">Programa Anual</a>
                            <a class="dropdown-item hvr-underline-from-left" href="{{route('totalEvaluaciones')}}">Total de Evaluaciones</a>
                            {{-- <a class="dropdown-item hvr-underline-from-left" href="{{route('evaluacionGlobal')}}">Evaluación Global</a> --}}
                            <a class="dropdown-item hvr-underline-from-left" href="{{route('sEE')}}">Sistema Estatal de Evaluación</a>
                            <a class="dropdown-item hvr-underline-from-left" href="{{route('contratacion')}}">Contratación de Evaluaciones</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light hvr-underline-reveal" href="{{route('marcoJuridico')}}">Marco Jurídico</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light hvr-underline-reveal" data-hover="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Convocatoria
                        </a>
                        <div class="dropdown-menu text-light" aria-labelledby="navbarDropdown">
                            <a href="{{route('convocatoria')}}" class="dropdown-item hvr-underline-from-left">Convocatoria 2019</a>
                            <a href="{{route('resultados.convocatoria')}}" class="dropdown-item hvr-underline-from-left">Resultados 2019</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light hvr-underline-reveal" href="{{route('aspectosMejora')}}">Aspectos Susceptibles de Mejora</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light hvr-underline-reveal" data-hover="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            De interés
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item hvr-underline-from-left" href="{{route('sitiosInteres')}}">Sitios de interés</a>
                            <a class="dropdown-item hvr-underline-from-left" href="{{route('terminosReferencia')}}">Terminos de referencia</a>
                            <a class="dropdown-item hvr-underline-from-left" href="{{route('capacitacion')}}">Capacitación</a>
                        </div>
                    </li>
                        {{--<li class="nav-item">
                            <a class="nav-link text-light"  href="{{ route('register') }}">Registrate<span class="sr-only">(current)</span></a>
                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link text-light hvr-underline-reveal" href="{{asset('docs/Aviso_Privacidad_Integral.docx')}}">Aviso de privacidad</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link text-light hvr-underline-reveal"  href="{{ route('login') }}">Accesar al Sistema<span class="sr-only">(current)</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
