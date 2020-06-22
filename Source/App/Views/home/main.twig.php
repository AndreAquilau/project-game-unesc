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
      </div> <!-- #branding -->
      <form id="formUser">
        <div class="right-section pull-right">
          <input type="hidden" name="id" value="{{USUARIO.id}}">
          <input type="hidden" name="usuario" value="{{USUARIO.usuario}}">
          <input type="submit" formaction="{{URL_BASE}}login" formmethod="POST" value="Home">
          <input type="submit" formaction="{{URL_BASE}}perfil" formmethod="GET" form="formUser" value="{{USUARIO.usuario}}">
          <input type="submit" formaction="{{URL_BASE}}biblioteca" formmethod="GET" form="formUser" value="Biblioteca">
          <input type="submit" formaction="{{URL_BASE}}game" formmethod="GET" form="formUser" value="Add Game">
          <a href="{{URL_BASE}}">LoginOut</a>
        </div> <!-- .right-section -->
      </form>
    </div>
  </div>

  <div class="home-slider " >
		<ul class="slides container" style="position: relative; color: #f5f5f5"  >
			{% for row in GAME|slice(0, 3) %}
				<li data-bg-image="{{ASSETS}}/dummy/slide-3.jpg">
				<div class="container">
					<div class="slide-content">
						<h2 class="slide-title">{{row.titulo}}</h2>
						<small class="slide-subtitle">$00.00</small>	
						<p>{{row.descricao}}.</p>
						<a href="cart.html" class="button">Add to cart</a>
					</div>
					<img src="{{row.thumb_url}}" class="slide-image">
				</div>
			</li>
    		{% endfor %}
		</ul> <!-- .slides -->
	</div> <!-- .home-slider -->
  </div>
	
  <main class="main-content">
	<div class="container">
		<div class="page">

			<section>
				<header>
					<h2 class="section-title">Nossos Lançamentos</h2>
				</header>

				<div class="product-list">

					{% for row in GAME%}
					<div class="product">
						<div class="inner-product">
							<div class="figure-image">
								<a href="single.html"><img src="{{row.thumb_url}}" alt="Game 4"></a>
							</div>
							<h3 class="product-title">{{row.titulo |slice(0, 17)}}.</h3>
							<small class="price">$00.00</small>
							<div>	
							<form >
							<div class="form-group">
                            <input type="hidden" name="id_jogo" value="{{row.id}}">
							<input type="hidden" name="id" value="{{USUARIO.id}}">
							<input type="hidden" name="id_usuario" value="{{USUARIO.id}}">
							<input type="hidden" name="usuario" value="{{USUARIO.usuario}}">
							<input type="hidden" name="ADD" value="ADD">
                            <input type="submit" formaction="{{URL_BASE}}biblioteca" formmethod="GET" value="Add Biblioteca">
							</div>
						</form> 
							<form>
							<div class="form-group">
                            <input type="hidden" name="id_jogo" value="{{row.id}}">
							<input type="hidden" name="id" value="{{USUARIO.id}}">
							<input type="hidden" name="usuario" value="{{USUARIO.usuario}}">
							<input  type="submit" formaction="{{URL_BASE}}viewGame" formmethod="GET" value="Visualizar">
							</div>
							</form>  	
							</div>
							<!-- http://localhost:8080/Projeto-Game/viewGame?id_jogo=22&usuario=Andre&id=1 -->
							 
						</div>
					</div> <!-- .product -->
             		{% endfor %}
				</div> <!-- .product-list -->

			</section>
		</div>
	</div> <!-- .container -->
  </main> <!-- .main-content -->


<div class="overlay"></div>

<div class="auth-popup popup">
	<a href="#" class="close"><i class="fa fa-times"></i></a>
	<div class="row">
		<div class="col-md-6">
			<h2 class="section-title">Login</h2>
			<form action="#">
				<input type="text" placeholder="Username...">
				<input type="password" placeholder="Password...">
				<input type="submit" value="Login">
			</form>
		</div> <!-- .column -->
		<div class="col-md-6">
			<h2 class="section-title">Create an account</h2>
			<form action="{{URL_BASE}}/register" method="POST">
				<input type="text" placeholder="Usuário..." name="usuario" required>
				<input type="password" placeholder="Senha" name="senha" required>
				<input type="text" placeholder="CPF" name="CPF" required>
				<label>Data de nascimento</label>
				<input type="date" placeholder="Data de Nascimento" name="nascimento" required>
				<input type="submit" value="register">
			</form>
		</div> <!-- .column -->


	</div> <!-- .row -->

</div> <!-- .auth-popup -->
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