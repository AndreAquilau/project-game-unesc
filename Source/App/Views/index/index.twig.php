{% extends "include/body.twig.php" %}

{%block head%}
<title>{{TITULO}}</title>
{%endblock%}

{% block body %}
<div id="site-content">
	<div class="site-header">
		<div class="container">
		<div id="branding">
				<img src="{{ASSETS}}/img/logo.png" alt="" class="logo">
				<div class="logo-text">
					<h1 class="site-title">Company name</h1>
				</div>
		</div>
			<div class="right-section pull-right">
				<a href="cart.html" class="cart"><i class="icon-cart"></i> 0 items in cart</a>
        <a href="{{URL_BASE}}login" class="login-button">Login</a>
        <a href="{{URL_BASE}}register" class="login-button">Register</a>
			</div> <!-- .right-section -->

			<div class="main-navigation">
				<button class="toggle-menu"><i class="fa fa-bars"></i></button>
				<ul class="menu">
					<li class="menu-item home current-menu-item"><a href="index.html"><i class="icon-home"></i></a></li>
					<li class="menu-item"><a href="products.html">Accessories</a></li>
					<li class="menu-item"><a href="products.html">Promotions</a></li>
					<li class="menu-item"><a href="products.html">PC</a></li>
					<li class="menu-item"><a href="products.html">Playstation</a></li>
					<li class="menu-item"><a href="products.html">Xbox</a></li>
					<li class="menu-item"><a href="products.html">Wii</a></li>
				</ul> <!-- .menu -->
				<div class="search-form">
					<label><img src="{{ASSETS}}/img/icon-search.png"></label>
					<input type="text" placeholder="Search...">
				</div> <!-- .search-form -->

				<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
			</div> <!-- .main-navigation -->
		</div> <!-- .container -->
	</div> <!-- .site-header -->

	<div class="home-slider">
		<ul class="slides">
			<li data-bg-image="{{ASSETS}}/dummy/slide-1.jpg">
				<div class="container">
					<div class="slide-content">
						<h2 class="slide-title">Kill Zone 3</h2>
						<small class="slide-subtitle">$190.00</small>

						<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>

						<a href="cart.html" class="button">Add to cart</a>
					</div>

					<img src="{{ASSETS}}/dummy/game-cover-1.jpg" class="slide-image">
				</div>
			</li>
			<li data-bg-image="{{ASSETS}}/dummy/slide-2.jpg">
				<div class="container">
					<div class="slide-content">
						<h2 class="slide-title">Kill Zone 3</h2>
						<small class="slide-subtitle">$190.00</small>

						<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>

						<a href="cart.html" class="button">Add to cart</a>
					</div>

					<img src="/{{ASSETS}}/dummy/game-cover-2.jpg" class="slide-image">
				</div>
			</li>
			<li data-bg-image="{{ASSETS}}/dummy/slide-3.jpg">
				<div class="container">
					<div class="slide-content">
						<h2 class="slide-title">Kill Zone 3</h2>
						<small class="slide-subtitle">$190.00</small>

						<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>

						<a href="cart.html" class="button">Add to cart</a>
					</div>

					<img src="dummy/game-cover-3.jpg" class="slide-image">
				</div>
			</li>
		</ul> <!-- .slides -->
	</div> <!-- .home-slider -->

	<main class="main-content">
		<div class="container">
			<div class="page">
				<section>
					<header>
						<h2 class="section-title">New Products</h2>
						<a href="#" class="all">Show All</a>
					</header>

					<div class="product-list">
						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.html"><img src="{{ASSETS}}/dummy/game-1.jpg" alt="Game 1"></a>
								</div>
								<h3 class="product-title"><a href="#">Alpha Protocol</a></h3>
								<small class="price">$19.00</small>
								<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
								<a href="cart.html" class="button">Add to cart</a>
								<a href="#" class="button muted">Read Details</a>
							</div>
						</div> <!-- .product -->

						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.html"><img src="{{ASSETS}}/dummy/game-2.jpg" alt="Game 2"></a>
								</div>
								<h3 class="product-title"><a href="#">Grand Theft Auto V</a></h3>
								<small class="price">$19.00</small>
								<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
								<a href="cart.html" class="button">Add to cart</a>
								<a href="#" class="button muted">Read Details</a>
							</div>
						</div> <!-- .product -->

						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.html"><img src="{{ASSETS}}/dummy/game-3.jpg" alt="Game 3"></a>
								</div>
								<h3 class="product-title"><a href="#">Need for Speed rivals</a></h3>
								<small class="price">$19.00</small>
								<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
								<a href="cart.html" class="button">Add to cart</a>
								<a href="#" class="button muted">Read Details</a>
							</div>
						</div> <!-- .product -->

						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.html"><img src="{{ASSETS}}/dummy/game-4.jpg" alt="Game 4"></a>
								</div>
								<h3 class="product-title"><a href="#">Big game hunter</a></h3>
								<small class="price">$19.00</small>
								<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
								<a href="cart.html" class="button">Add to cart</a>
								<a href="#" class="button muted">Read Details</a>
							</div>
						</div> <!-- .product -->

					</div> <!-- .product-list -->

				</section>

				<section>
					<header>
						<h2 class="section-title">promotion</h2>
						<a href="#" class="all">Show All</a>
					</header>

					<div class="product-list">

						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.html"><img src="{{ASSETS}}/dummy/game-5.jpg" alt="Game 1"></a>
								</div>
								<h3 class="product-title"><a href="#">Watch Dogs</a></h3>
								<small class="price">$19.00</small>
								<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
								<a href="cart.html" class="button">Add to cart</a>
								<a href="#" class="button muted">Read Details</a>
							</div>
						</div> <!-- .product -->


						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.html"><img src="{{ASSETS}}/dummy/game-6.jpg" alt="Game 2"></a>
								</div>
								<h3 class="product-title"><a href="#">Mortal Kombat X</a></h3>
								<small class="price">$19.00</small>
								<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
								<a href="cart.html" class="button">Add to cart</a>
								<a href="#" class="button muted">Read Details</a>
							</div>
						</div> <!-- .product -->


						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.html"><img src="{{ASSETS}}/dummy/game-7.jpg" alt="Game 3"></a>
								</div>
								<h3 class="product-title"><a href="#">Metal Gear Solid V</a></h3>
								<small class="price">$19.00</small>
								<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
								<a href="cart.html" class="button">Add to cart</a>
								<a href="#" class="button muted">Read Details</a>
							</div>
						</div> <!-- .product -->


						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.html"><img src="{{ASSETS}}/dummy/game-8.jpg" alt="Game 4"></a>
								</div>
								<h3 class="product-title"><a href="#">Nascar '14</a></h3>
								<small class="price">$19.00</small>
								<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
								<a href="cart.html" class="button">Add to cart</a>
								<a href="#" class="button muted">Read Details</a>
							</div>
						</div> <!-- .product -->

					</div> <!-- .product-list -->

				</section>
			</div>
		</div> <!-- .container -->
	</main> <!-- .main-content -->

	<div class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="widget">
						<h3 class="widget-title">Information</h3>
						<ul class="no-bullet">
							<li><a href="#">Site map</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div> <!-- .widget -->
				</div> <!-- column -->
				<div class="col-md-2">
					<div class="widget">
						<h3 class="widget-title">Consumer Service</h3>
						<ul class="no-bullet">
							<li><a href="#">Secure</a></li>
							<li><a href="#">Shipping &amp; Returns</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Orders &amp; Returns</a></li>
							<li><a href="#">Group Sales</a></li>
						</ul>
					</div> <!-- .widget -->
				</div> <!-- column -->
				<div class="col-md-2">
					<div class="widget">
						<h3 class="widget-title">My Account</h3>
						<ul class="no-bullet">
							<li><a href="#">Login/Register</a></li>
							<li><a href="#">Settings</a></li>
							<li><a href="#">Cart</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</div> <!-- .widget -->
				</div> <!-- column -->
				<div class="col-md-6">
					<div class="widget">
						<h3 class="widget-title">Join our newsletter</h3>
						<form action="#" class="newsletter-form">
							<input type="text" placeholder="Enter your email...">
							<input type="submit" value="Subsribe">
						</form>
					</div> <!-- .widget -->
				</div> <!-- column -->
			</div><!-- .row -->

			<div class="colophon">
				<div class="copy">Copyright 2014 Company name. Designed by Themezy. All rights reserved.</div>
				<div class="social-links square">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
				</div> <!-- .social-links -->
			</div> <!-- .colophon -->
		</div> <!-- .container -->
	</div> <!-- .site-footer -->
</div>


{% endblock %}