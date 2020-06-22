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
					<h1 class="site-title">xPlay</h1>
				</div>
		</div>
			<div class="right-section pull-right">
        <a href="{{URL_BASE}}login" class="login-button">Login</a>
        <a href="{{URL_BASE}}register" class="login-button">Register</a>
			</div> <!-- .right-section -->
				<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
			</div> <!-- .main-navigation -->
		</div> <!-- .container -->
	</div> <!-- .site-header -->

	
	<div class="home-slider " >
		<ul class="slides container" style="position: relative; color: #f5f5f5"  >
			{% for row in GAME|slice(0, 3) %}
				<li data-bg-image="{{ASSETS}}/dummy/slide-3.jpg">
				<div class="container">
					<div class="slide-content">
						<h2 class="slide-title">{{row.titulo}}</h2>
						<small class="slide-subtitle">$00.00</small>	
						<p>{{row.descricao}}.</p>
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
							<button class="btn bg-success text-white" onclick="window.location.href='{{URL_BASE}}login';">
							Add biblioteca
							</button>
							
							<!-- <a href='{{URL_BASE}}login'></a> -->
							<button class="btn bg-success text-white" style="margin-top: 3%;" onclick="window.location.href='{{URL_BASE}}login';">
							Visualizar 
							</button>
							
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
	
</div>


{% endblock %}