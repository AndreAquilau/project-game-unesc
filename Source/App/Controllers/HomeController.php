<?php

namespace Source\App\Controllers;

use Source\core\Router;
use Source\App\Model\Usuario;
/*  Classe está herdando os métodos de Router*/
class HomeController extends Router 
{
    /* Retornar a home da pagina HTML*/
    public function getHome($params){

    $params['TITULO'] = "Home";
    LoadTemplate("home/main", $params);
    }

}
