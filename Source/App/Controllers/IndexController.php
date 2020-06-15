<?php

namespace Source\App\Controllers;


use Source\App\Model\Usuario;

class IndexController 
{
    public function getIndex($params)
    {

        $params["TITULO"] = "Company Game";
        $params["MESSAGE"] = '';
        $params["ROTA"] = 'GET';
        LoadTemplate("index/index", $params);

    }

    public function postIndex($params)
    {

    }


}