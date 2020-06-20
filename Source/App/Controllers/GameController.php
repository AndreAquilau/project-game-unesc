<?php

namespace Source\App\Controllers;

use Source\App\Model\Perfil;
use Source\App\Model\Game;

class GameController 
{
    

    public function getGame()
    {

        $user = new Perfil($_GET['id'], $_GET['usuario']);

        $params["TITULO"] = "Game Add";
        $params["ROTA"] = 'GET';
        $dados = json_encode($user->getPerfil());
        $params["USUARIO"] = json_decode($dados, true);
        LoadTemplate("addGame/addGame", $params);
    }

    public function postGame($params)
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


    public function putGame($params)
    {



    }



    public function deleteGame($params)
    {

           

    }

}