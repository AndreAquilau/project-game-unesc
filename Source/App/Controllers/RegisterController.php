<?php

namespace Source\App\Controllers;


use Source\App\Model\Usuario;

class RegisterController 
{
    public function getRegister($params)
    {

        $params["TITULO"] = "Registrar-se";
        $params["MESSAGE"] = '';
        $params["ROTA"] = 'GET';
        LoadTemplate("register/register", $params);

    }

    public function postRegister($params)
    {

        $params["TITULO"] = "Registrar-se";

        $input = [
            "usuario"=> $_POST['usuario'],
            "senha"=> $_POST['senha'],
            "CPF"=> $_POST['CPF'],
            "dtNascimento"=> $_POST['nascimento']
        ];
        //var_dump($input);

        $user = new Usuario($input);
        $user->getDataCadastro();
        $params["ROTA"] = 'POST';
        $params["MESSAGE"] = $user->registrar();
        
        LoadTemplate("register/register", $params);
    }


}