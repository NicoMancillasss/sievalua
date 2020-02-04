
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sievalua">
  <meta name="keywords" content="Sistema"/>
  <meta name="author" content="Francisco Cervando Lozano Lozano">
  <meta name="copyright" content="Secretaria de la Funcion Pública" />
  <!--
        /*=====================================================================================
        =                 Desarrolladores del Sistema                                         =
        =                                                                                     =
        = Ing Sistemas Computacionales Nico Mancillas Amaro Correo= nicomancillasss@gmail.com =
        = I en Tics Francisco Cervando Lozano Lozano email= frankyer4a@gmail.com              =
        =                                                                                     =
        =====================================================================================*/
  -->


  <title>@yield('title')</title>

  <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">

  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
    <!-- Hover Master -->
    <link rel="stylesheet" media="all" href="{{asset('hovermaster/css/hover.css')}}">
    <!--Plugin Multi select -->
    <link rel="stylesheet" href="{{asset('plugins/multiselect/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <!-- GANTT MASTER -->
    <link rel="stylesheet" href="{{asset('plugins/gantt/dist/frappe-gantt.css')}}">
    <!--Dta Table -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/dataTable/datatables.min.css')}}"/>
    <!-- Image Hover -->
    <link rel="stylesheet" href="{{asset('plugins/imagehover/css/imagehover.css')}}">
    <!-- Hover Master -->
    <link rel="stylesheet" media="all" href="{{asset('plugins/introJs/css/introjs.css')}}">


  </head>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm d-flex justify-content-between">
        <div class="container w-auto h-25">
            <img src="{{asset('imagenes/zacatecas.png')}}" class="w-25 h-25 ml-5">
            <img src="{{asset('imagenes/SIEVALUA-horizontal.png')}}" class="w-25 h-50 mr-5">
        </div>
    </nav>
</header>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    @include('usuarios.administrador.layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">
        @include('usuarios.administrador.layouts.partials.navbar')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800"></h1>
          @yield('dashboard')
          @yield('content')

        </div>
      </div>
      @include('usuarios.administrador.layouts.partials.footer')
    </div>
  </div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('fontawesome/js/fontawesome.min.js')}}"></script>
<script src="{{ asset('fontawesome/js/all.min.js')}}"></script>
<script src="{{ asset('js/styles.js')}}"></script>
<!--Data Tables -->
<script type="text/javascript" src="{{asset('plugins/dataTable/datatables.min.js')}}"></script>

<!-- CALENDAR JS -->
{{--<script src="{{ asset('js/calendar.js')}}"></script>--}}
{{-- <script src="{{asset('js/app.js')}}"></script> --}}

<script src="{{asset('plugins/multiselect/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('plugins/multiselect/bootstrap-select/dist/js/i18n/defaults-es_ES.min.js')}}"></script>

<!-- GANTT MASTER -->

<script src="{{asset('plugins/gantt/dist/frappe-gantt.min.js')}}"></script>
<script src="{{ asset('js/gantt.js')}}"></script>


<!-- INTRO JS -->
{{-- <script src="{{asset('plugins/introJs/js/intro.js')}}"></script> --}}

<!-- BOOKLET -->
<script src="{{asset('plugins/booklet/src/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('plugins/booklet/src/jquery.booklet.latest.min.js')}}"></script>

{{-- script para el dataTable independiente en cada vista --}}
{{-- <script src="{{ asset('js/dataTable.js')}}"></script> --}}

</body>
@include('usuarios.administrador.layouts.partials.notificaciones')
<script type="text/javascript">
  $(function () {
    $("form").submit(function () {
				$("button").prop("disabled", true);
			});

    $('[data-toggle="tooltip"]').tooltip()
    });

    // $('table').DataTable({
    //     "language": {
    //     "sProcessing":    "Procesando...",
    //     "sLengthMenu":    "Mostrar _MENU_ registros",
    //     "sZeroRecords":   "No se encontraron resultados",
    //     "sEmptyTable":    "Ningún dato disponible en esta tabla",
    //     "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    //     "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
    //     "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
    //     "sInfoPostFix":   "",
    //     "sSearch":        "Buscar:",
    //     "sUrl":           "",
    //     "sInfoThousands":  ",",
    //     "sLoadingRecords": "Cargando...",
    //     "oPaginate": {
    //         "sFirst":    "Primero",
    //         "sLast":    "Último",
    //         "sNext":    "Siguiente",
    //         "sPrevious": "Anterior"
    //     },
    //     "oAria": {
    //         "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
    //         "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    //     }
    // }
    // });

    $('.custom-file-input').on('change', function(event) {
		var inputFile = event.currentTarget;
		$(inputFile).parent()
			.find('.custom-file-label')
			.html(inputFile.files[0].name);
    });


</script>
@yield('script')

</html>
