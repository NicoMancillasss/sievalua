<script>

	@if(Session::has('message_success'))
		toastr.options.showDuration = 300;
		toastr.options.progressBar = true;
		toastr.options.timeOut = 7000;
		toastr.options.closeButton = true;
		toastr.success('','{!! Session::get('message_success') !!}');
	@endif
	@if(Session::has('message_error'))
		toastr.options.showDuration = 300;
		toastr.options.progressBar = true;
		toastr.options.timeOut = 7000;
		toastr.options.closeButton = true;
		toastr.error('','{!! Session::get('message_error') !!}');
	@endif

	@if(Session::has('message_warning'))
		toastr.options.showDuration = 300;
		toastr.options.progressBar = true;
		toastr.options.timeOut = 7000;
		toastr.options.closeButton = true;
		toastr.warning('','{!! Session::get('message_warning') !!}');
	@endif

	@if(Session::has('sweet_success'))
		Swal.fire({
		  position: 'center',
		  type: 'success',
		  title: '{!! Session::get('sweet_success') !!}',
		  showConfirmButton: false,
		  timer: 11500
		});
	@endif

	@if(Session::has('sweet_success_ok'))
		Swal.fire(
		'{!! Session::get('sweet_success_ok') !!}',
		'',
		'success'
		);


	@endif

        @if (Session::has('sweet_correcciones')) {
            Swal.fire({
                type: 'error',
                title: '{!! Session::get('sweet_success') !!}',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            });
        }
        @endif

</script>
