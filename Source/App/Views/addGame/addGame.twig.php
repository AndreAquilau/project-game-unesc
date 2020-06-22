{% extends "include/body.twig.php" %}

{%block head%}
<title>{{TITULO}}</title>
<style>
/* HIDE RADIO */
.hiddenradio [type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
.hiddenradio [type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
.hiddenradio [type=radio]:checked + img {
  outline: 4px solid green;
}
</style>
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
          <input type="submit" formaction="{{URL_BASE}}perfil" formmethod="GET" form="formUser" value="{{USUARIO.usuario}}">
          <input type="submit" formaction="{{URL_BASE}}biblioteca" formmethod="GET" form="formUser" value="Biblioteca">
          <input type="submit" formaction="{{URL_BASE}}game" formmethod="GET" form="formUser" value="Add Game">
          <a href="{{URL_BASE}}">LoginOut</a>
        </div> <!-- .right-section -->
      </form>
    </div>
  </div>
</div>
<div class="container perfil_form">
  <h2 class="section-title">Criar Game</h2>
  <form action="{{URL_BASE}}game" method="POST">
    <div class="form-group">
      <input type="hidden" name="usuario" class="id" value="{{USUARIO.usuario}}">
      <input type="hidden" name="id_usuario" class="id" value="{{USUARIO.id}}">
    </div>
    <div class="form-group">
    <div class="form-group">
      <label for="">Dispositivo</label>
      <select name="dispositivo" id="dispositivo">
        <option value="PC">Computador</option>
        <option value="Play">PlayStation 5</option>
        <option value="Xbox">Xbox</option>
        <option value="Wii">Wii</option>
      </select>
    </div>
    </div>
    <div class="form-group">
      <input type="text" placeholder="Título..." class="titulo" name="titulo" required>
    </div>
    <div class="form-group">
    <label for="">Descrição</label>
      <input type="text" placeholder="Descrição..." class="descricao" name="descricao" required>
    </div>
    <div class="form-group">
      <label for="">URL Download</label>
      <input type="text" placeholder="Url de download..." class="dowload_url" name="dowload_url" required>
    </div>
    <label>Selecione a Thumbnail</label>
    <div class="hiddenradio" style="margin-bottom: 5%;">
      <label style="max-width: 20%; max-height: 20vh; margin-right: 3%; margin-left: 2.5%;">
        <input type="radio" name="thumb_url" value="{{ASSETS}}/dummy/game-1.jpg">
        <img src="{{ASSETS}}/dummy/game-1.jpg" style="max-height: 20vh">
      </label>
      <label style="max-width: 20%; max-height: 20vh; margin-right: 3%;">
        <input type="radio" name="thumb_url" value="{{ASSETS}}/dummy/game-2.jpg">
        <img src="{{ASSETS}}/dummy/game-2.jpg" style="max-height: 20vh; ">
      </label>
      <label style="max-width: 20%; max-height: 20vh; margin-right: 3%;">
        <input type="radio" name="thumb_url" value="{{ASSETS}}/dummy/game-3.jpg">
        <img src="{{ASSETS}}/dummy/game-3.jpg" style="max-height: 20vh;">
      </label>
      <label style="max-width: 20%; max-height: 20vh; margin-right: 3%;">
        <input type="radio" name="thumb_url" value="{{ASSETS}}/dummy/game-4.jpg">
        <img src="{{ASSETS}}/dummy/game-4.jpg" style="max-height: 20vh;">
      </label>
    </div>
    <div class="hiddenradio" style="margin-bottom: 5%;">
      <label style="max-width: 20%; max-height: 20vh; margin-right: 3%; margin-left: 2.5%;">
        <input type="radio" name="thumb_url" value="{{ASSETS}}/dummy/game-5.jpg">
        <img src="{{ASSETS}}/dummy/game-5.jpg" style="max-height: 20vh">
      </label>
      <label style="max-width: 20%; max-height: 20vh; margin-right: 3%;">
        <input type="radio" name="thumb_url" value="{{ASSETS}}/dummy/game-6.jpg">
        <img src="{{ASSETS}}/dummy/game-6.jpg" style="max-height: 20vh; ">
      </label>
      <label style="max-width: 20%; max-height: 20vh; margin-right: 3%;">
        <input type="radio" name="thumb_url" value="{{ASSETS}}/dummy/game-7.jpg">
        <img src="{{ASSETS}}/dummy/game-7.jpg" style="max-height: 20vh;">
      </label>
      <label style="max-width: 20%; max-height: 20vh; margin-right: 3%;">
        <input type="radio" name="thumb_url" value="{{ASSETS}}/dummy/game-8.jpg">
        <img src="{{ASSETS}}/dummy/game-8.jpg" style="max-height: 20vh;">
      </label>
    </div>
    <div class="form-group">
      <input type="submit"  value="Criar">
    </div>
    {% if GAME.success %}
    <div class="alert alert-dismissible alert-success" style="text-align: center">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{GAME.success}}</strong>
    </div>
    {% endif %}

    {% if GAME.errors %}
    {% for error in GAME.errors %}
    <div class="alert alert-dismissible alert-danger" style="text-align: center">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{error}}</strong>
    </div>
    {% endfor %}
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