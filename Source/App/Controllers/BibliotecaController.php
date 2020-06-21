<?php

namespace Source\App\Controllers;

use Source\App\Model\Perfil;
use Source\App\Model\Biblioteca;

class BibliotecaController 
{
    

    public function getBiblioteca()
    {
        $user = new Perfil($_GET['id'], $_GET['usuario']);
        $jogos = new Biblioteca();

        $res = json_encode($jogos->getBiblioteca($_GET['id'], $_GET['usuario']), JSON_UNESCAPED_UNICODE);
        $params["TITULO"] = "Biblioteca";
        $params["ROTA"] = 'GET';
        $dados = json_encode($user->getPerfil());
        $params["USUARIO"] = json_decode($dados, true);
        $params["GAME"] = json_decode($res,  true);

        print_r($params);

        LoadTemplate("biblioteca/biblioteca", $params);

    }

    public function postBiblioteca($params)
    {

        $game = new Game();

        $input = [
            "id_usuario" => $_POST["id_usuario"],
            "titulo" => $_POST["titulo"],
            "descricao" => $_POST["descricao"],
            "thumb_url" => $_POST["thumb_url"],
            "dowload_url" => $_POST["dowload_url"],
            "dispositivo" => $_POST["dispositivo"],
        ];

        $res = json_encode($game->postGame($input), JSON_UNESCAPED_UNICODE);
        $user = new Perfil($_POST['id_usuario'], $_POST['usuario']);
        $dados = json_encode($user->getPerfil());
        $params["USUARIO"] = json_decode($dados, true);
        $params["GAME"] = json_decode($res,  true);

        print_r($params);

        LoadTemplate("addGame/addGame", $params);

    }


    public function putBiblioteca($params)
    {



    }



    public function deleteBiblioteca($params)
    {

           

    }

}