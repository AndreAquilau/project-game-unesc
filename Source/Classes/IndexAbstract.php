<?php
// Classe abstrata do index controller
abstract class IndexAbstract
{

     
    abstract public function getIndex($params);

    abstract public function postIndex($params);
} 