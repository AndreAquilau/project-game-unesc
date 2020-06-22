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
      </div> <!-- #branding -->
      <form id="formUser">
        <div class="right-section pull-right">
          <input type="hidden" name="id" value="{{USUARIO.id}}">
          <input type="hidden" name="usuario" value="{{USUARIO.usuario}}">
          <input type="submit" formaction="{{URL_BASE}}login" formmethod="POST" value="Home">
          <input type="submit" formaction="{{URL_BASE}}perfil" formmethod="GET" value="{{USUARIO.usuario}} ">
          <input type="submit" formaction="{{URL_BASE}}biblioteca" formmethod="GET" form="formUser" value="Biblioteca">
          <input type="submit" formaction="{{URL_BASE}}game" formmethod="GET" form="formUser" value="Add Game">
          <a href="{{URL_BASE}}">LoginOut</a>
        </div> <!-- .right-section -->
      </form>
    </div>
  </div>
</div>
<div class="container perfil_form">
  <h2 class="section-title">Altera conta</h2>
  <form action="{{URL_BASE}}perfil" method="POST">
    <div class="form-group">
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="id" class="id" value="{{USUARIO.id}}">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Usuário..." class="usuario" name="usuario" value="{{USUARIO.usuario}}" required>
    </div>
    <div class="form-group">
      <input type="password" placeholder="Senha" class="senha"  name="senha" required>
    </div>
    <div class="form-group">
      <input type="text" placeholder="CPF" name="CPF" class="CPF"  value="{{USUARIO.cfp}}" required>
    </div>
    <div class="form-group">
      <label>Data de nascimento</label>
      <input type="date" placeholder="Data de Nascimento" class="data_nascimento"  name="data_nascimento" value="{{USUARIO.data_nascimento}}" required>
    </div>
    <div class="form-group form_btn">
      <input type="submit"  value="Alterar">
    </div>
    {% if USUARIO.success %}
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{USUARIO.success}}</strong>
    </div>
    {% endif %}

    {% if USUARIO.error%}

    <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{USUARIO.error}}</strong>
    </div>

    {% endif %}
  </form>
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
<div>

</div>
{% endblock %}