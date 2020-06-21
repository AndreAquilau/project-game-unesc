<?php

namespace Source\App\Model;

use Source\db\Database;

class Biblioteca
{

  public function __construct()
  {

  }


  public function getBiblioteca($id, $usuario)
  {
    $instance = new Database();
    $conn = $instance->getInstance();

    $sql = ('SELECT * FROM  user_biblioteca WHERE usuario =\'' . $usuario . "'" . ' AND ' . 'ID_USUARIO = \'' . $id . "'");

    //echo $sql;
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $dados = $stmt->fetchAll();

    //print_r($dados);

    return $dados;

  }

  public function postBiblioteca($params) {
  
  }

}
