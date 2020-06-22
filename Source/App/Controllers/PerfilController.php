<?php

namespace Source\App\Controllers;


use Source\App\Model\Perfil;

/*  Classe está herdando os métodos de Router*/
class PerfilController 
{
    
    /* Função publica que exibe a página de perfil do usuário */
    public function getPerfil()
    {

        $user = new Perfil($_GET['id'], $_GET['usuario']);

        $params["TITULO"] = "Perfil";
        $params["ROTA"] = 'GET';
        $dados = json_encode($user->getPerfil());
        $params["USUARIO"] = json_decode($dados, true);
        // Carrega a página de perfil e envia os dados do usuário logal
        LoadTemplate("perfil/perfil", $params);

    }

    // Altera os dados da página de perfil
    public function putPerfil($params)
    {


             //$params["USUARIO"] = $user->getPerfil();

            $user = new Perfil($_POST['id'], $_POST['usuario']);
            $params["TITULO"] = "Perfil";
            $params["MESSAGE"] = '';
            $dados = json_encode($user->putPerfil([
                "usuario" => $_POST['usuario'],
                "password" => $_POST['senha'],
                "CPF" => $_POST['CPF'],
                "data_nascimento" => $_POST['data_nascimento'],
                "id" => $_POST['id']
            ]),  JSON_UNESCAPED_UNICODE);
            //$dados = json_encode($user->getPerfil());
            $params["USUARIO"] = json_decode($dados,  false, 512, JSON_UNESCAPED_UNICODE);
            //print_r($dados);
            LoadTemplate("perfil/perfil", $params);

    }


    /* Deleta o perfil do usuário */
    public function deletePerfil($params)
    {

             //$params["USUARIO"] = $user->getPerfil();

            $user = new Perfil($_POST['id'], $_POST['usuario']);
            $user->deletePerfil([
                "usuario" => $_POST['usuario'],
                "CPF" => $_POST['CPF'],
                "id" => $_POST['id']
            ]);
            $params["TITULO"] = "Company Game";
            LoadTemplate("index/index", $params);

    }

}


