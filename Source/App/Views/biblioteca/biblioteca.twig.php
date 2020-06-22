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
</div>
<main class="main-content">
	<div class="container">
		<div class="page">
						
			<table class="cart">
				<thead>
					<tr>
						<th class="product-name">Jogo da Biblioteca</th>
						<th class="product-price">Preço</th>
						<th class="product-qty">Visualizar</th>
						<th class="product-total">Download</th>
						<th class="action"></th>
					</tr>
				</thead>
				  <tbody>
                
                {% for row in GAME%}
                <tr>
                  <td class="product-name" >
                    <div class="form-group">
                      <input type="hidden" name="id_jogo" value="{{row.id_jogo}}">
                      <input type="hidden" name="usuario" value="{{USUARIO.usuario}}">
                      <input type="hidden" name="id" value="{{row.id_usuario}}">
                    </div>
                    <div class="product-thumbnail" style="width: 60px;">
                      <img src="{{row.thumb_url}}" style="width: 60px;" alt="">
                    </div>
                    <div class="product-detail">
                      <h3 class="product-title">{{row.titulo}}</h3>
                      <p>{{row.descricao}}.</p>
                    </div>
                  </td>
                  <td class="product-price">R$00.00</td>
                    <td class="product-qty">
                      <form>
                            <input type="hidden" name="id_jogo" value="{{row.id_jogo}}">
                            <input type="hidden" name="usuario" value="{{USUARIO.usuario}}">
                            <input type="hidden" name="id" value="{{row.id_usuario}}">
                            <input type="submit" formaction="{{URL_BASE}}viewGame" formmethod="GET" value="Visualizar">
                      </form>   
                  </td>
                  <td class="product-total"><a href="{{row.dowload_url}}" target="_blank" rel="noopener noreferrer">Download</a></td>
                  
                  <td class="action">
                    <div>
                      <form>
                        <input type="hidden" name="id" value="{{row.id_usuario}}">
                        <input type="hidden" name="id_jogo" value="{{row.id_jogo}}">
                        <input type="hidden" name="id_usuario" value="{{row.id_usuario}}">
                        <input type="hidden" name="usuario" value="{{USUARIO.usuario}}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Remover" formaction="{{URL_BASE}}biblioteca"  >
                      </form>
                    </div>
                  </td>   
              </tr>
              {% endfor %}
          </tbody>
                    
      </table>
    </div>
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
</>
{% endblock %}