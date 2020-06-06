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
        self::login();
        self::registerget();
        self::registerpost();
    }

    //Rotas 
    //$this->router->group() = define um grupo para todos as rotas do método.
    //$this->router->namespace() = define um controlador para a requisição.
    public function home(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/", "HomeController:getHome", "HomeController.getHomer");
    }

    public function login(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->post("/", "HomeController:postHome", "HomeController.postHomer");
    }

    public function registerget(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/register", "RegisterController:getRegister", "RegisterController.getRegister");
    }

    public function registerpost(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->post("/register", "RegisterController:postRegister", "RegisterController.postRegister");
    }
}