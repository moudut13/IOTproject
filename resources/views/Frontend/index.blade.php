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
        <link rel="icon" type="image" href="{{ asset('frontend/images/favicon.png') }}">
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="{{ route('frontend.index') }}">MM Power Station Pvt Company Ltd</a></h1>
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
					<h2>MM Power Station Pvt Company Ltd</h2>
					<p>Electricity is the power of our energy.</p>
					<ul class="actions special">
						<!--<li><a href="#" class="button primary">Sign Up</a></li>-->
						<li><a href="#" class="button">Learn More</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Introducing the ultimate power
							<br />
							for doing MM Power Station Pvt Company Ltd</h2>
							<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare<br />
							adipiscing nunc adipiscing. Condimentum turpis massa.</p>
						</header>
						<span class="image featured "><img src="images/pic01.jpg" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon solid major fa-bolt accent2"></span>
								<h3>Power</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
                                <!--icon solid major fa-chart-area accent3-->
								<span class=""><img style="width: 80px;margin-bottom: 40px;" src="{{ asset('frontend/images/2.png') }}" alt="" /></span>
								<h3>Distribution Line</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
                                <!--icon solid major fa-cloud accent4 -->
								<span class=""><img style="width: 80px" src="{{ asset('frontend/images/1.png') }}" alt="" /></span>
								<h3>Transmission Line</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
                                <!--icon solid major fa-lock accent5-->
								<span class=""><img style="width: 80px" src="{{ asset('frontend/images/4.png') }}" alt="" /></span>
								<h3>Generator</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
					</section>

					<div class="row">
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="{{ asset('frontend/images/pic02.jpg') }}" alt="" /></span>
								<h3>Sed lorem adipiscing</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions special">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="{{ asset('frontend/images/pic03.jpg') }}" alt="" /></span>
								<h3>Accumsan integer</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions special">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
					</div>

				</section>

			<!-- CTA -->
				<section id="cta">

					<h2>Sign up for beta access</h2>
					<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>

					<form>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-8 col-12-mobilep">
								<input type="email" name="email" id="email" placeholder="Email Address" />
							</div>
							<div class="col-4 col-12-mobilep">
								<input type="submit" value="Sign Up" class="fit" />
							</div>
						</div>
					</form>

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
						<li>Copyright &copy; 2021 MM Power Station Pvt Company Ltd. All rights reserved.</li><li>Design: <a href="https://www.facebook.com/moudut.shuvo13">Moudut Ahmad Khondoker</a></li>
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
