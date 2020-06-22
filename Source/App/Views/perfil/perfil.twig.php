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

<div>

</div>
{% endblock %}