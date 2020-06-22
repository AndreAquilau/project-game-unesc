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

</>
{% endblock %}