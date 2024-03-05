<!doctype html>
<html lang="en">
  <head>
  	<title>Login Nemoclass</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('assets_login/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/main.css') }}">

	</head>
	<body class="img" style="background-image: url({{ asset('img/auth/bg.jpg') }});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="">
					<img class="mx-auto" src="{{ asset('img/logo/Logo WEB Pameran Game-01.png') }}" alt="" width="240">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center" style="font-family: 'Popins'; letter-spacing:10px;">RPL EXHIBITION</h3>
		      	<form action="{{ route('check-login') }}" method="post" class="signin-form">
					@csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Email" required name="email">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Kata sandi" name="password" required>
                  <div class="mt-2">
                      <span>Belum Memili Akun?</span>
                      <a href="{{ route('register') }}" class="mr-5"> daftar disini</a>
                  </div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('assets_login/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets_login/js/popper.js') }}"></script>
  <script src="{{ asset('assets_login/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets_login/js/main.js') }}"></script>

	</body>
</html>

