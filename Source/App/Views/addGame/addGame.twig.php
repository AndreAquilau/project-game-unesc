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
          <input type="submit" value="Biblioteca">
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
    <div class="form-group" style="margin-bottom: 5%;">
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
    <div class="form-group" style="margin-bottom: 5%;">
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
  </form>
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
<div>

</div>
{% endblock %}