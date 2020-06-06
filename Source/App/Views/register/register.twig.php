{% extends "include/body.twig.php" %}

{%block head%}
<title>{{TITULO}}</title>
{%endblock%}

{% block body %}
<form action="{{URL_BASE}}/register" method="POST" id="formLogin">
  <fieldset>
    <legend></legend>
    {% if MESSAGE and ROTA == 'POST' %}
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Well done!</strong> Successfully <a href="#" class="alert-link">Usuário cadastrado</a>.
    </div>
    {% endif %}

    {% if MESSAGE == false and ROTA == 'POST' %}
    <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Oh snap!</strong> <a href="#" class="alert-link">Erro ao cadastrar usuário</a> Preencha o formulário abaixo corretamente
    </div>
    {% endif %}
    <div class="form-group">
      <label for="exampleInputEmail1">Usuário</label>
      <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter usuário">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="">CPF</label>
      <input type="text" class="form-control" name="CPF" aria-describedby="emailHelp" placeholder="Enter CPF">
    </div>
    <div class="form-group">
      <label for="">Data de nascimento</label>
      <input type="date" class="form-control" name="nascimento" aria-describedby="emailHelp" placeholder="Enter date">
    </div>
    <div class="btn-login text-center">
      <button type="submit" class="btn btn-primary ">Registrar</button>
    </div>
  </fieldset>
</form>
{% endblock %}