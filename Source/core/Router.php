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
    }

    //Rotas 
    //$this->router->group() = define um grupo para todos as rotas do método.
    //$this->router->namespace() = define um controlador para a requisição.
    public function home(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/home", "HomeController:getHome", "HomeController.getHomer");
    }

    public function index(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/", "IndexController:getIndex", "IndexController.getIndex");
        $this->router->post("/", "IndexController:postIndex", "IndexController.postIndex");
    }

    public function login(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/login", "LoginController:getLogin", "LoginController.getLogin");
        $this->router->post("/login", "LoginController:postLogin", "LoginController.postLogin");
    }


    public function register(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/register", "RegisterController:getRegister", "RegisterController.getRegister");
        $this->router->post("/register", "RegisterController:postRegister", "RegisterController.postRegister");
    }

    public function perfil(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/perfil", "PerfilController:getPerfil", "PerfilController.getPerfil");
        $this->router->put("/perfil", "PerfilController:putPerfil", "PerfilController.putPerfil");
    }

    public function getRouter(){
        return $this->router;
    }

}