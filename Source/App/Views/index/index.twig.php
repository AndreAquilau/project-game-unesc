{% extends "include/body.twig.php" %}

{%block head%}
<title>{{TITULO}}</title>
{%endblock%}

{% block body %}
<div id="site-content">
	<div class="site-header">
		<div class="container">
			<a href="{{URL_BASE}}" id="branding">
				<img src="{{ASSETS}}/img/logo.png" alt="" class="logo">
				<div class="logo-text">
					<h1 class="site-title">Company name</h1>
					<small class="site-description">Tagline goes here</small>
				</div>
			</a> <!-- #branding -->
			<div class="right-section pull-right">
				<a href="{{URL_BASE}}register" class="login-button">Register</a>
			</div> <!-- .right-section -->
			</div> <!-- .main-navigation -->
		</div> <!-- .container -->
	</div> <!-- .site-header -->
</div>
<div class="container login_form">
	<form action="#" class="login">
		<h2 class="section-title">Login</h2>
		<div class="form-group">
		<input type="text" placeholder="Username...">
		</div>
		<div class="form-group">
		<input type="password" placeholder="Password...">
		</div>
	<div class="form-group form_btn">
	<input type="submit" value="Login">
	</div>
	</form><!-- .column -->
</div>

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

{% endblock %}