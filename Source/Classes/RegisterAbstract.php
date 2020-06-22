<?php
// Classe abstrata do register controller
abstract class RegisterAbstract
{

     
    abstract public function getRegister($params);

    abstract public function postRegister($params);
} 