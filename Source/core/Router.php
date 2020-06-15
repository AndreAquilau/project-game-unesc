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

    public function register(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/register", "RegisterController:getRegister", "RegisterController.getRegister");
        $this->router->post("/register", "RegisterController:postRegister", "RegisterController.postRegister");
    }

}