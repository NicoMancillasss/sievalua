@extends('layouts.app')
@section('content')
<div class="" >
    <img src="{{asset('imagenes/principal/banners/banner06.jpg')}}" class="w-100" alt="">
</div>
@if ($totalE->count()==0)
                <div class="card shadow m-4">

                    <div class="jumbotron jumbotron-fluid mt-4">
                    <div class="container">
                        <h1 class="display-4">No se han encontrado registros</h1>
                    </div>
                    </div>
                </div>
            @else
            <div class="container">
                    <div class="row m-5 ">
                    @foreach ($totalE as $te)
                        <div class="col">
                            <a class="hvr-float-shadow" href="" target="_blanck" data-toggle="modal" data-target="#myModal{{$te->id}}">
                                <div class=" h-100 justify-content-center  mx-sm-1 p-3 ">
                                    <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                                    <div class="text-dark text-center mt-3">
                                        <h6>{{$te->titulo}}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
            @endif

        </div>
            @foreach ($totalE as $te)
                <div id="myModal{{$te->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">{{$te->titulo}}</h4>
                            </div>
                            <div class="modal-body">

                                <embed src="{{asset('storage/'.$te->documento)}}"
                                        frameborder="0" width="100%" height="400px">

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col">
                <a class="hvr-float-shadow" href="{{asset('wp-content/EEdD_Fortalecimiento-y-Competitividad.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN ESPECÍFICA DE DESEMPEÑO</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/EDyC_Fortalecimiento-y-Competitividad.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN DE CONSISTENCIA Y RESULTADOS</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_Vivienda-y-Reserva-Territorial_Componente-3.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>CONSTRUCCIÓN Y MEJORAMIENTO DE VIVIENDA</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_Vivienda-y-Reserva-Territorial_Componente-2.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>VIVIENDA Y RESERVA TERRITORIAL</h6>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="row m-5 ">

            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_Responsabilidad-Diferente.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>RESPONSABILIDAD DIFERENTE</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_Oportunidades-para-las-Mujeres.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>OPORTUNIDADES PARA LAS MUJERES</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_Fondo-Plata.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>FONDO PLATA</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col  ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_FISN.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>FIDEICOMISO DE IMPUESTO SOBRE NÓMINA</h6>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="row m-5 ">

            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_Desarrollo-Emprendedor.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>PROGRAMA DESARROLLO EMPRENDEDOR</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_Concurrencia-con-Municipios.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN DE CONCISTENCIA Y RESULTADOS DEL PROGRAMA CONCURRENCIA CON MUNICIPIOS</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_Autoproduccion-de-Alimentos.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>PROGRAMA AUTOPRODUCCIÓN DE ALIMENTOS</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_Apoyo-al-Empleo.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>PROGRAMA DE APOYO AL EMPLEO CON FOMENTO DE LA IGUALDAD DE GÉNERO</h6>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="row m-5 ">

            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_-Fomento-Productivo-de-la-Mujer.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>FONDO PARA EL FOMENTO PRODUCTIVO DE LA MUJER</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECy-R_Impulsar-el-Deporte.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>PROGRAMA IMPULSAR EL DEPORTE DE ALTO RENDIMIENTO DEL EJERCICIO FISCAL 2017</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Responsabilidad-Diferente.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN DE CONSISTENCIA Y RESULTADOS PARA EL PRGRAMA RESPONSABILIDAD DIFERENTE.</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Oportunidades-para-las-Mujeres.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN DE CONSISTENCIA Y RESULTADOS PARA EL PRGRAMA OPORTUNIDADES PARA LA MUJER</h6>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="row m-5 ">

            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/ECyR_-Fomento-Productivo-de-la-Mujer.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN ESPECÍFICA DE CONCISTENCIA Y RESULTADOS CON ENFOQUE SOCIAL AL PROGRAMA IMPULSAR AL DEPORTE DE ALTO RENDIMIENTO.</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Impulsar-el-Deporte.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN ESPECÍFICA DE CONSISTENCIA Y RESULTADOS CON ENFOQUE SOCIAL AL PROGRAMA IMPULSAR EL DEPORTE DE ALTO RENDIMIENTO.</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Fortalecimiento-y-Competitividad.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>Evaluación Específica de Desempeño para el Programa Estratégico para el Fortalecimiento y Competitividad de las Actividades Económicas del Estado de Zacatecas.</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Fondo-Plata.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN ESPECÍFICA DE CONSISTENCIA Y RESULTADOS CON ENFOQUE SOCIAL AL PROGRAMA ACCESO A FINANCIAMIENTO A LAS EMPRESAS Y ACTIVIDADES PRODUCTIVAS DE LA ENTIDAD (FONDO PLATA)</h6>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="row m-5 ">

            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Fomento-Productivo-de-la-Mujer.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN DE CONSISTENCIA Y RESULTADOS DEL FONDO PARA EL FOMENTO PRODUCTIVO DE LA MUJER</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_FISN.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN DEL DESEMPEÑO FIDEICOMISO DE IMPUESTO SOBRE NÓMINA</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Desarrollo-Emprendedor.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN EXTERNA DE CONSISTENCIA Y RESULTADOS AL PROGRAMA DESARROLLO EMPRENDEDOR: CRÉDITOS E INICIATIVA JOVEN, CORRESPONDIENTE AL EJERCICIO FISCAL2017.</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Concurrencia-con-Municipios.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN DE CONSISTENCIA Y RESULTADOS DEL PROGRAMA CONCURRENCIA CON MUNICIPIOS</h6>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="row m-5 ">

            <div class="col-3">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Autoproduccion-Alimentos.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>EVALUACIÓN DE CONSISTENCIA Y RESULTADOS AÑO FISCAL 2017, PROGRAMA AUTOPRODUCCIÓN DE ALIMENTOS</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3 ">
                <a class="hvr-float-shadow" href="{{asset('wp-content/Formato-CONAC_Apoyo-al-Autoempleo.pdf')}}" target="_blanck" >
                    <div class=" justify-content-center h-100 mx-sm-1 p-3  ">
                        <div class="text-center"><i class="fi-xwluxl-file-pdf-wide fi-4x text-danger"></i></div>
                        <div class="text-dark text-center mt-3">
                            <h6>
                                EVALUACIÓN DE CONSISTENCIA Y RESULTADOS DEL PROGRAMA DE APOYO AL EMPLEO CON FOMENTO A
                                LA IGUALDAD Y A LA NO DISCRIMINACIÓN, EN SUS CUATRO SUBPROGRAMAS: BÉCATE, FOMENTO AL AUTOEMPLEO,
                                MOVILIDAD LABORAL AGRÍCOLA Y REPATRIADOS TRABAJANDO
                            </h6>
                        </div>
                    </div>
                </a>
            </div>

        </div> --}}

    </div>
</div>
@endsection
