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
            "senhaConfirm"=> $_POST['senhaConfirm'],
            "CPF"=> $_POST['CPF'],
            "dtNascimento"=> $_POST['nascimento']
        ];
        //var_dump($input);

        $user = new Usuario($input);
        $user->getDataCadastro();

        $user->validarRegistro();

        $params["ROTA"] = 'POST';

        if(count($user->errors) > 0){
            //print_r($user->errors);
            $params["ERRORS"] = $user->errors;
            LoadTemplate("register/register", $params);
            return;
        }

        $user->registrar();

        if(count($user->errors) > 0){
            //print_r($user->errors);
            $params["ERRORS"] = $user->errors;
            LoadTemplate("register/register", $params);
            return;
        }

        $params["MESSAGE"] = 'Usuário Cadastrado Com Sucesso.';
        LoadTemplate("register/register", $params);

        return;
    }

    


}