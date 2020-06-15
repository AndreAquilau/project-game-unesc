<?php

namespace Source\App\Controllers;


use Source\App\Model\Usuario;
use Source\core\Router;

class IndexController extends Router
{
    public function getIndex($params)
    {

        $params["TITULO"] = "Company Game";
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