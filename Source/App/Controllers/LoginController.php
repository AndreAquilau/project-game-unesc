<?php

namespace Source\App\Controllers;


use Source\App\Model\Usuario;
use Source\core\Router;

class LoginController extends Router
{
    public function getLogin($params)
    {

        $params["TITULO"] = "Company Game";
        LoadTemplate("login/login", $params);

    }

    public function postLogin($params)
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
            LoadTemplate("login/login", $params);
            return;
        }

        $dados = $user->dadosUser;

        $params['USUARIO'] = $dados[0];
        
        //parent::getRouter()->redirect('/home', $dados);
        LoadTemplate("home/main", $params);
       
    }


}