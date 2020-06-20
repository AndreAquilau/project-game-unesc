<?php

namespace Source\App\Controllers;


use Source\App\Model\Usuario;
use Source\core\Router;
use Source\App\Model\Perfil;

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


        if(!empty($_POST['usuario']) && !empty($_POST['id'])){

            $user = new Perfil($_POST['id'], $_POST['usuario']);
            $dados = json_encode($user->getPerfil());
            $params["USUARIO"] = json_decode($dados, true);

            print_r($params);
            LoadTemplate("home/main", $params);
            return;
        }

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

        $dados = json_encode($user->dadosUser[0]);
        $dados = json_decode($dados, true);

        $params["USUARIO"] = $dados;
        
        LoadTemplate("home/main", $params);
       
    }


}