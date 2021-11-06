<!DOCTYPE HTML>
<!--
	Shuvo html
	https://www.moudutshuvo.com
-->
<html>
	<head>
		<title>SA Research lab | By Shuvo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image" href="frontend/images/favicon.png">
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 style="font-size: 16px;"><a href="{{ route('frontend.index') }}">Power Station Pvt Company Ltd</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="{{ route('frontend.index') }}">Home</a></li>
							<li>
                                <a href="#">Contact</a>
                            </li>
							<li><a href="{{ route('login') }}" class="button">Login</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>Power Station Pvt Company Ltd</h2>
					<p>Electricity is the power of our energy.</p>
					<ul class="actions special">
						<li><a href="#" class="button">Learn More</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

                    <section class="box special">
                        <header class="major">
                            <h2>Power Station Pvt Company Ltd
                                <br />Login
                                </h2>
                            <br>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-8">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Login') }}
                                                            </button>

                                                            @if (Route::has('password.request'))
                                                                <a class="btn btn-link" style="text-decoration: none;color: #1b1e21" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
                    </section>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Power Station Pvt Company Ltd. All rights reserved.</li><li>Design: <a href="https://www.facebook.com/moudut.shuvo13">Moudut Ahmad</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/jquery.dropotron.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/util.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

	</body>
</html>
