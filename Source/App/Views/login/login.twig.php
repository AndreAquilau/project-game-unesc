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
				<a href="{{URL_BASE}}" class="login-button">Home</a>
			</div> <!-- .right-section -->
		</div> <!-- .main-navigation -->
	</div> <!-- .container -->
</div> <!-- .site-header -->
</div>
<div class="container br login_form">
	<form action="{{URL_BASE}}login" method="POST" class="login">
		<h2 class="section-title">Login</h2>
		<div class="form-group">
			<input type="text" name="usuario" placeholder="Username...">
		</div>
		<div class="form-group">
			<input type="password" name="senha" placeholder="Password...">
		</div>
		<div class="form-group form_btn">
			<input type="submit" value="Login">
		</div>

    {% if ERRORS %}
    {% for error in ERRORS %}
    <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{error}}</strong>
    </div>
    {% endfor %}
    {% endif %}

	</form><!-- .column -->
</div>


{% endblock %}