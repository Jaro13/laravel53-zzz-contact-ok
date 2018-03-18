<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>TUTAJ TUTUŁ STRONY DYNAMICZNIE - jest w device mockup to</title>



	 <!-- Bootstrap Core CSS -->
	<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

	 <!-- Custom Fonts -->
	<link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{ asset('css/modern-business.css')}}" rel="stylesheet">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->




	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
	  "palette": {
	    "popup": {
	      "background": "#252e39"
	    },
	    "button": {
	      "background": "transparent",
	      "text": "#14a7d0",
	      "border": "#14a7d0"
	    }
	  },
	  "showLink": false,
	  "position": "bottom-right",
	  "content": {
	    "message": "Ta witryna używa plików cookie.",
	    "dismiss": "Rozumiem"
	  }
	})});
	</script>




</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="{{ route('home') }}">Start Bootstrap</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">


									<li>
										<a href="{{ route('home') }}">Home</a>
									</li>
									<li>
										<a href="{{ route('services') }}">Services</a>
									</li>
									<li>
										<a href="{{ route('contact.form') }}">Contact</a>
									</li>





									<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
											<ul class="dropdown-menu">
													<li>
															<a href="portfolio-1-col.html">1 Column Portfolio</a>
													</li>
													<li>
															<a href="portfolio-2-col.html">2 Column Portfolio</a>
													</li>
													<li>
															<a href="portfolio-3-col.html">3 Column Portfolio</a>
													</li>
													<li>
															<a href="portfolio-4-col.html">4 Column Portfolio</a>
													</li>
													<li>
															<a href="portfolio-item.html">Single Portfolio Item</a>
													</li>
											</ul>
									</li>
									<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
											<ul class="dropdown-menu">
													<li>
															<a href="blog-home-1.html">Blog Home 1</a>
													</li>
													<li>
															<a href="blog-home-2.html">Blog Home 2</a>
													</li>
													<li>
															<a href="blog-post.html">Blog Post</a>
													</li>
											</ul>
									</li>
									<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
											<ul class="dropdown-menu">
													<li>
															<a href="full-width.html">Full Width Page</a>
													</li>
													<li>
															<a href="sidebar.html">Sidebar Page</a>
													</li>
													<li>
															<a href="faq.html">FAQ</a>
													</li>
													<li>
															<a href="404.html">404</a>
													</li>
													<li>
															<a href="pricing.html">Pricing Table</a>
													</li>
											</ul>
									</li>
							</ul>
					</div>
					<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
	</nav>












	<div class="container">
		  @include('flash-message')
			 @include('flash::message')


		@yield('content')


		<hr>

		<!-- Footer -->
		<footer>
				<div class="row">
						<div class="col-lg-12">
								<p>Copyright &copy; Your Website {{ current_year() }}</p>
						</div>
				</div>
		</footer>

	</div>




	    <!-- jQuery -->
	    <script src="{{ asset('js/jquery.js')}}"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

			<!-- Script to Activate the Carousel -->
			<script>
			$('.carousel').carousel({
					interval: 5000 //changes the speed
			})



			</script>
			<script>
			  $('#flash-overlay-modal').modal();
			</script>



			@include('cookieConsent::index')

</body>
</html>
