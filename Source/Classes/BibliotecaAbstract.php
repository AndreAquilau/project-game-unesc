<?php
// Uma biblioteca abstrata
abstract class BibliotecaAbstract
{

     
    // Retorna a view biblioteca com jogos
    abstract public function getBiblioteca ($res);

    abstract public function postBiblioteca($params);

    abstract public function addBiblioteca();

    abstract public function viewGame($params);
} 