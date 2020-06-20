<?php

namespace Source\App\Controllers;

use Source\core\Router;
use Source\App\Model\Usuario;

class HomeController extends Router 
{
    public function getHome($params){

    $params['TITULO'] = "Home";
    
    LoadTemplate("home/main", $params);
    }

}
