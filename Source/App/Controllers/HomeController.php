<?php

namespace Source\App\Controllers;

use Source\core\Router;
use Source\App\Model\Usuario;

class HomeController extends Router 
{
    public function getHome($params)
    {
        $params['TITULO'] = "Home";

        print_r($params);
        
        LoadTemplate("home/main", $params);
    }

    public function postHome($params)
    {

        $params['TITULO'] = "Home";
        
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        //var_dump(Usuario::login($usuario, $senha));

        //print_r($params);
        LoadTemplate("home/main", $params);
    }
}
