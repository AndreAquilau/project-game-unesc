{% extends "include/body.twig.php" %}

{%block head%} 
<title>{{TITULO}}</title>
{%endblock%}

{% block body %}
<form action="{{URL_BASE}}/" method="POST" id="formLogin">
  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Usuário</label>
      <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter usuário">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Password">
    </div>
    <div class="btn-login text-center">
    <button type="submit" class="btn btn-primary ">Entrar</button>
    </div>
  </fieldset>
  <div class="text-center">
  <button type="button" class="btn btn-link">
    <a href="{{URL_BASE}}/register" id="link-register">registrar-se</a>
  </button>
  </div>
</form>

{% endblock %}