<?php

namespace Source\core;

//Pacote responsavel pelo controle das requisições e pelas rotas. /$Dev. Andre 25-04-20/
use CoffeeCode\Router\Router as App;
use Source\core\Router;

class Controller
{
    //app vai ser o controlador da aplição, vai fica responsavel por fica escutandos requisições./$Dev. Andre 25-04-20/
    private $app;
    private $router;

    //Deve ser passado a url base do projeto http://localhost/url_base/ ./$Dev. Andre 25-04-20/
    public function __construct($url)
    {
        //inserindo pacote no atributo app./$Dev. Andre 25-04-20/
        $this->setApp($url);
        $this->setRoutes($this->app);
    }

    //Método responsalvel por inserir o pacote de controller de requisições no atributo app. /$Dev. Andre 25-04-20/
    public function setApp(string $url)
    {
        $this->app = new App($url);
    }

    //Método responsavel por ativa a esculta de requisições do aplicação. /$Dev. Andre 25-04-20/
    public function on():void
    {
        $this->app->dispatch();
    }

    //Metodo para carrega todas as rotas da apliação.
    public function setRoutes($app){
        $this->router = new Router($app);
    }

    public function useRoutes(){
        $this->router->loaderRoutes();
    }

}