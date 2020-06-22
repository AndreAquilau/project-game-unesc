<?php
// Classe abstrata do perfil controller
abstract class PerfilAbstract
{

     
    abstract public function getPerfil();

    abstract public function putPerfil($params);

    abstract public function deletePerfil($params);
} 