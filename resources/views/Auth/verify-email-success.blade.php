<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	  <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
  </head>
  <body>
        <div class="row g-3 position-absolute translate-middle start-50 top-50 col-lg-6 bg-light p-3">
            <h3 class="text-center">Haloo</h3>
            <p class="text-center">Email verifikasi telah kami kirim kembali, Silahkan cek Gmail kamu sekarang</p>
            
            <form action="{{ route('verification.send') }}" method="post">
              @csrf
                <button class="btn-sm btn-secondary">Kirim Ulang</button>
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('javascript/toastr.min.js') }}"></script>
    <script>
		  toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
		@if (Session::has('message'))
			toastr.{{ Session::get('alert') }}("{{ Session::get('message') }}")
		@endif

		</script>
  </body>
</html>