<?php

namespace Source\App\Controllers;


use Source\App\Model\Usuario;
use Source\core\Router;
use Source\App\Model\Game;

class IndexController extends Router
{
 
    public function getIndex($params)
    {

        $params["TITULO"] = "xPlay";
            $jogos = new Game();
            $jogos = json_encode($jogos->gameAll(), JSON_UNESCAPED_UNICODE);
            $jogos = json_decode($jogos, true);
            $params["GAME"] = $jogos;
            print_r($params);

            LoadTemplate("index/index", $params);

    }

    

    public function postIndex($params)
    {
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

        if(count($user->errors) > 0){
            print_r($user->errors);
            $params["ERRORS"] = $user->errors;
            LoadTemplate("index/index", $params);
            return;
        }

        $dados = $user->dadosUser;

        $params['USUARIO'] = $dados[0];
        
        //parent::getRouter()->redirect('/home', $dados);
        LoadTemplate("home/main", $params);
       
    }


}