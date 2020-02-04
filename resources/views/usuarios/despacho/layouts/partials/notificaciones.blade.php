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

</script>
