<?php

namespace Source\App\Controllers;


use Source\App\Model\Usuario;
use Source\core\Router;
use Source\App\Model\Game;
/*  Classe está herdando os métodos de Router*/
class IndexController extends Router
{
    /* Retornar a pagina principal quando está deslogado e listar o jogo */
    public function getIndex($params)
    {

        $params["TITULO"] = "xPlay";
            $jogos = new Game();
            /* Buscando todos os jogos cadastrados no sistema */
            $jogos = json_encode($jogos->gameAll(), JSON_UNESCAPED_UNICODE);
            $jogos = json_decode($jogos, true);
            $params["GAME"] = $jogos;
           // Carrega a página principal ao estar deslogado

            LoadTemplate("index/index", $params);

    }

    
/* Função publica para realizar login*/
    public function postIndex($params)
    {
        /* Busca dados do formulário e salva na variável */
        $params["TITULO"] = "Company Game";
        $input = [
            "usuario"=> $_POST['usuario'],
            "senha"=> $_POST['senha'],
            "senhaConfirm"=> '',
            "CPF"=> '',
            "dtNascimento"=> ''
        ];

        $user = new Usuario($input);
        
        $user->login();
        /* Retorna os erros do sistema */
        if(count($user->errors) > 0){
           // print_r($user->errors);
            $params["ERRORS"] = $user->errors;
            LoadTemplate("index/index", $params);
            return;
        }

        $dados = $user->dadosUser;

        $params['USUARIO'] = $dados[0];
        
        //parent::getRouter()->redirect('/home', $dados);
        /* Retorna a página principal quando está logado. */
        LoadTemplate("home/main", $params);
       
    }


}