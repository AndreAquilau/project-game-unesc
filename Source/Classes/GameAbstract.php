<?php
// Classe abstrata do gamer controller
abstract class GameAbstract
{

     
    abstract public function getGame();

    abstract public function postGame($params);
} 