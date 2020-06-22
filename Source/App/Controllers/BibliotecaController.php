<?php

namespace Source\App\Controllers;
/* // */
use Source\App\Model\Perfil;
use Source\App\Model\Biblioteca;
use Source\core\Router;
/*  Classe está herdando os métodos de Router*/
class BibliotecaController extends Router
{
    
/* Função publica para enviar os jogos e abrir a view da biblioteca*/
    public function getBiblioteca($res)
    {
        $user = new Perfil($_GET['id'], $_GET['usuario']);
        $jogos = new Biblioteca();

                /*GET- get para pegar os dados do formulario HTML  */
        if(isset($_GET['ADD'])){

            $jogos->addGame($_GET['id_usuario'], $_GET['id_jogo']);
            $res = json_encode($jogos->getBiblioteca($_GET["id_usuario"], $_GET['usuario']), JSON_UNESCAPED_UNICODE);
            $params["TITULO"] = "Biblioteca";
            $params["ROTA"] = 'GET';
            $dados = json_encode($user->getPerfil());
            $params["USUARIO"] = json_decode($dados, true);
            $params["GAME"] = json_decode($res,  true);
    
    
            LoadTemplate("biblioteca/biblioteca", $params);

            return;
        }
                /*GET-pegar os dados do formulario HTML  */
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
/* Função publica para adicionar jogos ao sistema */
    public function postBiblioteca($params)
    {

        $game = new Game();
/* POST- retorna registros do nosso formulario*/
        $input = [
            "id_usuario" => $_POST["id_usuario"],
            "titulo" => $_POST["titulo"],
            "descricao" => $_POST["descricao"],
            "thumb_url" => $_POST["thumb_url"],
            "dowload_url" => $_POST["dowload_url"],
            "dispositivo" => $_POST["dispositivo"],
        ];
/* POST- retorna registros do nosso banco de dados*/
        $res = json_encode($game->postGame($input), JSON_UNESCAPED_UNICODE);
        $user = new Perfil($_POST['id_usuario'], $_POST['usuario']);
        $dados = json_encode($user->getPerfil());
        $params["USUARIO"] = json_decode($dados, true);
        $params["GAME"] = json_decode($res,  true);

        

        LoadTemplate("addGame/addGame", $params);

    }
/* função publica para adicionar um jogo a biblioteca*/
    public function addBiblioteca() {
        $jogos = new Biblioteca();
        $jogos->addGame($_GET['id_usuario'], $_GET['id_jogo']);

        parent::getRouter()->redirect("/login", $params);

    }
/* Função publica para visualizar os dados de um jogo especifíco*/
    public function viewGame($params)
    {
        $jogos = new Biblioteca();

        $res = json_encode($jogos->viewGame($_GET['id_jogo'], $_GET['usuario'], $_GET['usuario']), JSON_UNESCAPED_UNICODE);

        $user = new Perfil($_GET['id'], $_GET['usuario']);
        $params["TITULO"] = "View Game";
        $dados = json_encode($user->getPerfil());
        $params["USUARIO"] = json_decode($dados, true);
        $params["GAME"] = json_decode($res,  true);
       // Carrega a tela para visualizar o jogo
        LoadTemplate("viewGame/viewGame", $params);
    }



    

}