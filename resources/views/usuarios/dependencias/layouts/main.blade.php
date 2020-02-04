
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
      /*=================================================================================
      =                         Desarrolladores del Sistema                             =
      =                                                                                 =
      =                                 Ing en Tics                                     =
      =         Francisco Cervando Lozano Lozano email= frankyer4a@gmail.com            =
      =                    Ing en Sistemas Computacionales                              =
      =            Nico Mancillas Amaro email= nicomancillasss@gmail.com                =
      =                                                                                 =
      =================================================================================*/
    -->


    <title>Dependencia</title>

    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">

    {{-- plugin export excel--}}
  <link href = "{{asset('plugins/ExportExcel/css/tableexport.css')}}" rel = "stylesheet" type = "text / css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
    <!-- Hover Master -->
    <link rel="stylesheet" media="all" href="{{asset('hovermaster/css/hover.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/csshake/dist/csshake.min.css')}}">
    <!--Select Picker -->
    <link rel="stylesheet" href="{{asset('plugins/multiselect/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/introJs/css/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/introJs/css/introjs-modern.css')}}">

  </head>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm d-flex justify-content-between">
      <div class="container w-auto h-25">
        <img src="{{asset('imagenes/zacatecas.png')}}" class="w-25 h-25 ml-5">
        <img src="{{asset('imagenes/SIEVALUA-horizontal.png')}}" class="w-25 h-50 m-r5">
      </div>
    </nav>
  </header>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      @include('usuarios.dependencias.layouts.partials.sidebar')

      <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">
          @include('usuarios.dependencias.layouts.partials.navbar')
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"></h1>
            @yield('dashboard')
            @yield('content')

          </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
        @include('usuarios.dependencias.layouts.partials.footer')
      </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetAlert2/sweet.js') }}"></script>
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- plugion inputmask --}}
    <script src="{{ asset('plugins/mask/jquery.mask.js') }}"></script>
    <script src="{{ asset('fontawesome/js/fontawesome.min.js')}}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js')}}"></script>
    <script src="{{ asset('js/styles.js')}}"></script>
    <script src="{{asset('plugins/multiselect/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <!--Table Export
  <script src = "{{--asset('plugins/ExportExcel/FileSaver.min.js')--}}"> </script>
  <script src = "{{--asset('plugins/ExportExcel/js/tableexport.js')--}}" ></script>-->

    <!-- INTRO JS -->
    <script src="{{asset('plugins/introJs/js/intro.js')}}"></script>

</body>
    @include('layouts.notificaciones')
    @yield('script')

<script type="text/javascript">
    $(function ()
    {
        $("form").submit(function () {
            $("button").prop("disabled", true);
        });

      //modulo para la viisualizacion de los inputs de bootstrap
      //evento para que el input de tipo file funcione
		$('.custom-file-input').on('change', function(event) {
		var inputFile = event.currentTarget;
		$(inputFile).parent()
			.find('.custom-file-label')
			.html(inputFile.files[0].name);
		});


        $(document).on('change','input[type="file"]',function(){
            var fileSize = this.files[0].size;

            if(fileSize > 10000000){
            alert('El archivo no debe superar los 10MB');
            $('input[type="file"]').val('');
            var tpl = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> El archivo no debe superar los 5MB'

            +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '
            +'</div>';

            $('.contenedor').html(tpl)
            }
        });

            //inicializacion de los toltip Globales
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover()
            $('.selectMultiple').selectpicker(
            {
              noneSelectedText : 'Seleccione una opción'
            });
          });

        document.getElementById('startButton').onclick = function() {
            introJs().setOption('doneLabel', 'Next page').start().oncomplete(function() {
                window.location.href = 'second.html?multipage=true';
            });
        };

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });



</script>
</html>
