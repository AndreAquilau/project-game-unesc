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
                    <input type="submit" formaction="{{URL_BASE}}perfil" formmethod="GET" form="formUser"
                        value="{{USUARIO.usuario}}">
                    <input type="submit" formaction="{{URL_BASE}}biblioteca" formmethod="GET" form="formUser"
                        value="Biblioteca">
                    <input type="submit" formaction="{{URL_BASE}}game" formmethod="GET" form="formUser"
                        value="Add Game">
                    <a href="{{URL_BASE}}">LoginOut</a>
                </div> <!-- .right-section -->
            </form>
        </div>
    </div>
</div>
<main class="main-content">
    <div class="container">
        <div class="page">

            <div class="entry-content">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="product-images">
                            <figure class="large-image">
                                <img src="{{GAME[0].thumb_url}}" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h2 class="entry-title">{{GAME[0].titulo}}</h2>
                        <small class="price">$00.00</small>

                        <p>
                        {{GAME[0].descricao}}
                        </p>
                  
                        <div class="addtocart-bar">
                            <form>
                                <a href="{{GAME[0].dowload_url}}"  target="_blank">Download</a>
                                {% if GAME[0].id_usuario == GAME[0].id_desenvolvedor %}
                                    <input type="hidden" name="id" value="{{GAME[0].id_usuario}}">
                                    <input type="hidden" name="usuario" value="{{GAME[0].usuario}}">
                                    <input type="hidden" name="id_jogo" value="{{GAME[0].id_jogo}}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" formaction="{{URL_BASE}}game" formmethod="GET" style="background-color: Tomato" value="Remover Jogo da Biblioteca Para Todos">
                                {% endif %}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

</>
{% endblock %}