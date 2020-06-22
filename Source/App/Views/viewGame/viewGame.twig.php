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
                                {% if USUARIO.id == GAME[0].id_desenvolvedor %}
                                    <input type="hidden" name="id" value="{{USUARIO.id}}">
                                    <input type="hidden" name="usuario" value="{{USUARIO.usuario}}">
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

</>
{% endblock %}