<!-- Javascript -->
<script type="text/javascript" src="{{ asset('public/assets/lib/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/lib/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/lib/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/lib/mixitup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/lib/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/script.js') }}"></script>

{{-- Sweet alert CDN --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- alert --}}
<script>
	@if (session('success'))
		swal({
		  title: "Success!",
		  text: "{{ session('success') }}",
		  icon: "success",
		  button: "OK",
		});
	@endif
	@if (session('error'))
		swal({
		  title: "Error!",
		  text: "{{ session('error') }}",
		  icon: "error",
		  button: "OK",
		});
	@endif
	@if (session('warning'))
		swal({
		  title: "Warning!",
		  text: "{{ session('warning') }}",
		  icon: "warning",
		  button: "OK",
		});
	@endif
	@if (session('message'))
		swal({
		  // title: "Info!",
		  text: "{{ session('message') }}",
		  icon: "info",
		  button: "OK",
		});
	@endif
	@if (session('delete'))
		swal({
		  title: "Removed!",
		  text: "{{ session('delete') }}",
		  icon: "success",
		  button: "OK",
		});
	@endif
</script>