<?php

namespace Source\App\Controllers;


use Source\App\Model\Usuario;
use Source\core\Router;
use Source\App\Model\Perfil;
use Source\App\Model\Game;

/*  Classe está herdando os métodos de Router*/
class LoginController extends Router
{
    /* Carrega página de login */
    public function getLogin($params)
    {

        $params["TITULO"] = "Company Game";
        LoadTemplate("login/login", $params);

    }
/* Função publica para fazer login e mostrar os jogos cadastrados*/
    public function postLogin($params)
    {
        $params["TITULO"] = "Company Game";

        /* Verifica se usuário está logado no sistema */
        if(!empty($_POST['usuario']) && !empty($_POST['id'])){
            /* Busca todos os jogos e carrega a página para listar os jogos */
            $user = new Perfil($_POST['id'], $_POST['usuario']);
            $dados = json_encode($user->getPerfil());
            $params["USUARIO"] = json_decode($dados, true);
            $jogos = new Game();
            $jogos = json_encode($jogos->gameAll(), JSON_UNESCAPED_UNICODE);
            $jogos = json_decode($jogos, true);
            $params["GAME"] = $jogos;
           // print_r($params);
            LoadTemplate("home/main", $params);
            return;
        }

        /* Busca os campos do usuário para fazer o login */
        $input = [
            "usuario"=> $_POST['usuario'],
            "senha"=> $_POST['senha'],
            "senhaConfirm"=> '',
            "CPF"=> '',
            "dtNascimento"=> ''
        ];

        $user = new Usuario($input);

        $user->login();

        if(count($user->errors) > 0){
           // print_r($user->errors);
            $params["ERRORS"] = $user->errors;
            LoadTemplate("login/login", $params);
            return;
        }

        $jogos = new Game();
        $jogos = json_encode($jogos->gameAll(), JSON_UNESCAPED_UNICODE);
        $jogos = json_decode($jogos, true);
        $dados = json_encode($user->dadosUser[0]);
        $dados = json_decode($dados, true);

        $params["GAME"] = $jogos;
        $params["USUARIO"] = $dados;

       // print_r($params);
        
        LoadTemplate("home/main", $params);
       
    }


}