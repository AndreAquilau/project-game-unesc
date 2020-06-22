<?php

namespace Source\App\Controllers;

use Source\App\Model\Perfil;
use Source\App\Model\Biblioteca;
use Source\core\Router;

class BibliotecaController extends Router
{
    

    public function getBiblioteca($res)
    {
        $user = new Perfil($_GET['id'], $_GET['usuario']);
        $jogos = new Biblioteca();


        if(isset($_GET['ADD'])){

            $jogos->addGame($_GET['id_usuario'], $_GET['id_jogo']);
            $res = json_encode($jogos->getBiblioteca($_GET["id_usuario"], $_GET['usuario']), JSON_UNESCAPED_UNICODE);
            $params["TITULO"] = "Biblioteca";
            $params["ROTA"] = 'GET';
            $dados = json_encode($user->getPerfil());
            $params["USUARIO"] = json_decode($dados, true);
            $params["GAME"] = json_decode($res,  true);
    
            //print_r($params);
    
            LoadTemplate("biblioteca/biblioteca", $params);

            return;
        }

        if(isset($_GET['_method'])){
  
            $jogos->deleteGame( $_GET["id_usuario"], $_GET["id_jogo"]);
            $res = json_encode($jogos->getBiblioteca($_GET["id_usuario"], $_GET['usuario']), JSON_UNESCAPED_UNICODE);
            $params["TITULO"] = "Biblioteca";
            $params["ROTA"] = 'GET';
            $dados = json_encode($user->getPerfil());
            $params["USUARIO"] = json_decode($dados, true);
            $params["GAME"] = json_decode($res,  true);
    
            //print_r($params);
    
            LoadTemplate("biblioteca/biblioteca", $params);

            return;
        }


        $res = json_encode($jogos->getBiblioteca($_GET['id'], $_GET['usuario']), JSON_UNESCAPED_UNICODE);
        $params["TITULO"] = "Biblioteca";
        $params["ROTA"] = 'GET';
        $dados = json_encode($user->getPerfil());
        $params["USUARIO"] = json_decode($dados, true);
        $params["GAME"] = json_decode($res,  true);

        //print_r($params);

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

        //print_r($params);

        LoadTemplate("addGame/addGame", $params);

    }

    public function addBiblioteca() {
        $jogos = new Biblioteca();
        $jogos->addGame($_GET['id_usuario'], $_GET['id_jogo']);

        parent::getRouter()->redirect("/login", $params);

    }

    public function viewGame($params)
    {
        $jogos = new Biblioteca();

        $res = json_encode($jogos->viewGame($_GET['id_jogo'], $_GET['usuario'], $_GET['usuario']), JSON_UNESCAPED_UNICODE);

        $user = new Perfil($_GET['id'], $_GET['usuario']);
        $params["TITULO"] = "View Game";
        $dados = json_encode($user->getPerfil());
        $params["USUARIO"] = json_decode($dados, true);
        $params["GAME"] = json_decode($res,  true);
       // print_r($params["GAME"]);
        LoadTemplate("viewGame/viewGame", $params);
    }



    

}