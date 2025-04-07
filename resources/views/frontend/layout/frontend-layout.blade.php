<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="./assets/img/favicon.png" type="image/png">
	<title>I'm Parvez | @yield('title', 'Page')</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" href="./assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="./assets/css/magnific-popup.css">
	<link rel="stylesheet" href="./assets/vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/"><img src="./assets/img/logo.png" alt="Home"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}"><a class="nav-link" href="{{ url("/") }}">Home</a></li>
							<li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}"><a class="nav-link" href={{ url("/about") }}>About</a></li>
							<li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}"><a class="nav-link" href={{ url("/services") }}>Services</a></li>
							<li class="nav-item {{ request()->routeIs('portfolio') ? 'active' : '' }}"><a class="nav-link" href={{ url("/portfolio") }}>Portfolio</a></li>							
							<li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}"><a class="nav-link" href={{ url("/contact") }}>Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

    <div id="contentRef" class="content">
        @yield('content')
    </div>

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="./assets/#">
								<img src="./assets/img/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="./assets/#"><i class="fa fa-facebook"></i></a>
							<a href="./assets/#"><i class="fa fa-twitter"></i></a>
							<a href="./assets/#"><i class="fa fa-dribbble"></i></a>
							<a href="./assets/#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="./assets/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="./assets/js/jquery-3.2.1.min.js"></script>
	<script src="./assets/js/popper.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/stellar.js"></script>
	<script src="./assets/js/jquery.magnific-popup.min.js"></script>
	<script src="./assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="./assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="./assets/vendors/isotope/isotope-min.js"></script>
	<script src="./assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="./assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="./assets/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="./assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="./assets/js/gmaps.min.js"></script>
	<script src="./assets/js/theme.js"></script>
</body>

</html>