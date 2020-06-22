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
<div class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="widget">
          <h3 class="widget-title">Turma</h3>
          <ul class="no-bullet">
            <li><a href="#">3° Período</a></li>
          </ul>
        </div> <!-- .widget -->
      </div> <!-- column -->
      <div class="col-md-2">
        <div class="widget">
          <h3 class="widget-title">Alunos</h3>
          <ul class="no-bullet">
            <li><a href="#">André</a></li>
            <li><a href="#">Isabelly</a></li>
            <li><a href="#">Janismar</a></li>
            <li><a href="#">Letícia</a></li>
            <li><a href="#">Miguel</a></li>
          </ul>
        </div> <!-- .widget -->
      </div> <!-- column -->
      <div class="col-md-2">
        <div class="widget">
          <h3 class="widget-title">Matéria</h3>
          <ul class="no-bullet">
            <li><a href="#">Programação Orientada a Objetos</a></li>
            <li><a href="#">Prof° Diego</a></li>
          </ul>
        </div> <!-- .widget -->
      </div> <!-- column -->
      <div class="col-md-6">
        <div class="widget">
          <h3 class="widget-title">Alunos do 3° Período de Sistemas de Informação da Unesc</h3>
          <form action="#" class="newsletter-form">
            <input type="text" placeholder="Digite seu email...">
            <input type="submit" value="Enviar">
          </form>
        </div> <!-- .widget -->
      </div> <!-- column -->
    </div><!-- .row -->

    <div class="colophon">
      <div class="copy">Copyright 2020 Alunos do 3° Período de Sistemas de Informação da Unesc. Designed by Themezy. All rights reserved.</div>
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