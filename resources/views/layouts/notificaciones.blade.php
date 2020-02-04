<div class="modal fade" id="alert_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">{{--  ¡La convocatoria se ha cerrado! --}} </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					@if (Session::has('alert_modal'))
						{{$session = Session::get('alert_modal')}}
					@endif
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
				</div>
			</div>
		</div>
	</div>

<div class="modal fade" id="c_cerrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> ¡La convocatoria se ha cerrado! </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					{!! Session::get('c_cerrada') !!}
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="mensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-check-circle"></i> ¡Solicitud Enviada! </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					{!! Session::get('modal') !!}
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
	@if(Session::has('message_success'))
		toastr.options.showDuration = 1000;
		toastr.options.progressBar = true;
		toastr.options.timeOut = 7000;
		toastr.options.closeButton = true;
		toastr.success('','{!! Session::get('message_success') !!}');
	@endif
	@if(Session::has('message_error'))
		toastr.options.showDuration = 1000;
		toastr.options.progressBar = true;
		toastr.options.timeOut = 7000;
		toastr.options.closeButton = true;
		toastr.error('','{!! Session::get('message_error') !!}');
	@endif

	@if(Session::has('message_warning'))
		toastr.options.showDuration = 1000;
		toastr.options.progressBar = true;
		toastr.options.timeOut = 7000;
		toastr.options.closeButton = true;
		toastr.warning('','{!! Session::get('message_warning') !!}');
	@endif
	@if(Session::has('message_info'))
		toastr.options.showDuration = 300;
		toastr.options.progressBar = true;
		toastr.options.timeOut = 7000;
		toastr.options.closeButton = true;
		toastr.info('','{!! Session::get('message_warning') !!}');
	@endif

	@if(Session::has('ultimo'))
		toastr.options.showDuration = 1000;
		toastr.options.timeOut = 100000;
		toastr.options.closeButton = true;
		toastr.error('','{!! Session::get('ultimo') !!}');
	@endif

    @foreach ($errors->all() as $error)
		toastr.options.showDuration = 300;
		toastr.options.progressBar = true;
		toastr.options.timeOut = 7000;
		toastr.options.closeButton = true;
		toastr.error('','{{ $error }}');
    @endforeach

    @if(Session::has('modal'))
		$('#mensaje').modal('show');
		$('#confirmacion').modal('show');
	@endif

	@if(Session::has('c_cerrada'))
		$('#c_cerrada').modal('show');
	@endif

	@if(Session::has('alert_modal'))
		$('#alert_modal').modal('show');
		{{ Session()->forget('alert_modal') }}

	@endif

	@if(Session::has('sweet_success'))
		Swal.fire({

		  position: 'center',
		  type: 'success',
		  title: '{!! Session::get('sweet_success') !!}',
		  showConfirmButton: false,
		  timer: 10000,
		});
	@endif

	@if(Session::has('sweet_success_ok'))
		Swal.fire(
		'{!! Session::get('sweet_success_ok') !!}',
		'',
		'success'
		);


	@endif

    



</script>






