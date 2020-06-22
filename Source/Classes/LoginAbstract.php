<?php
// Classe abstrata do login controller
abstract class LoginAbstract
{

     
    abstract public function getLogin($params);

    abstract public function postLogin($params);
} 