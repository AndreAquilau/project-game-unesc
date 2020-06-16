<?php

namespace Source\App\Controllers;


use Source\App\Model\Perfil;

class PerfilController 
{
    

    public function getPerfil($params)
    {
        $user = new Perfil($_GET['id'], $_GET['usuario']);

        $params["TITULO"] = "Perfil";
        $params["MESSAGE"] = '';
        $params["ROTA"] = 'GET';
        $params["USUARIO"] = $user->getPerfil();

        LoadTemplate("perfil/perfil", $params);

    }

    public function putPerfil($params)
    {
        $_PUT = array();
        parse_str(file_get_contents('php://input'), $_PUT);

        $user = new Perfil();
        echo "PUT PERFIL";
        $params["TITULO"] = "Perfil";
        $params["MESSAGE"] = '';
        $params["ROTA"] = 'PUT';
        $params["USUARIO"] = $user->putPerfil($input = 
        [
            "id" => $_PUT['id'],
            "usuario"=> $_PUT['usuario'],
            "senha"=> $_PUT['senha'],
            "senhaConfirm"=> $_PUT['senhaConfirm'],
            "CPF"=> $_PUT['CPF'],
            "dtNascimento"=> $_PUT['nascimento']
        ]);

        LoadTemplate("perfil/perfil", $params);

    }


}