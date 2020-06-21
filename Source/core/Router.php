<?php 

namespace Source\core;

use Source\core\Controller;

class Router
{
    private $router;

    public function __construct($app)
    {
        $this->setRouter($app);
    }

    public function setRouter($app)
    {
        $this->router = $app;
    }

    public function loaderRoutes(){
        self::home();
        self::index();
        self::register();
        self::login();
        self::perfil();
        self::game();
        self::biblioteca();
    }

    //Rotas 
    //$this->router->group() = define um grupo para todos as rotas do método.
    //$this->router->namespace() = define um controlador para a requisição.
    public function home(){
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/home/{id}/{usuario}", "HomeController:getHome", "HomeController.getHomer");
    }

    public function index(){
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/", "IndexController:getIndex", "IndexController.getIndex");
        $this->router->post("/", "IndexController:postIndex", "IndexController.postIndex");
    }

    public function login(){
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/login", "LoginController:getLogin", "LoginController.getLogin");
        $this->router->post("/login", "LoginController:postLogin", "LoginController.postLogin");
    }


    public function register(){
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/register", "RegisterController:getRegister", "RegisterController.getRegister");
        $this->router->post("/register", "RegisterController:postRegister", "RegisterController.postRegister");
    }

    public function perfil(){
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/perfil", "PerfilController:getPerfil", "PerfilController.getPerfil");
        $this->router->post("/perfil", "PerfilController:putPerfil", "PerfilController.putPerfil");

    }

    public function game(){
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/game", "GameController:getGame", "GameController.getGame");
        $this->router->post("/game", "GameController:postGame", "GameController.postGame");

    }

    public function biblioteca(){
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/biblioteca", "BibliotecaController:getBiblioteca", "BibliotecaController.getBiblioteca");
        $this->router->post("/biblioteca", "BibliotecaControllerBibliotecaController :postBiblioteca", "BibliotecaController.postBiblioteca");
        $this->router->get("/viewGame", "BibliotecaController:viewGame", "BibliotecaController.viewGame");
    }


    public function getRouter(){
        return $this->router;
    }

}