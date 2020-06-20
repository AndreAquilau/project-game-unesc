<?php

namespace Source\App\Model;

use Source\db\Database;

class Game
{
  private $id;
  private $usuario;

  public function __construct($id = [], $usuario = [])
  {
    $this->id = $id;
    $this->usuario = $usuario;
  }


  public function getPerfil()
  {



  }

  public function postGame($params) {
  
    $instance = new Database();
    $conn = $instance->getInstance();

    $sql = ('INSERT INTO jogo(titulo, descricao,thumb_url,dowload_url,dispositivo, id_usuario)' .
    " VALUES('" . $params['titulo'] . "', '" . $params['descricao'] . "', '" . $params['thumb_url'] ."', '" . $params['dowload_url'] . "', '" . $params['dispositivo'] . "', '" . $params['id_usuario'] . "')");

    //echo $sql;

    $stmt = $conn->prepare($sql);
    
    $stmt->execute();
       
    if($stmt->rowCount() > 0){
      
      $params['success'] = "Jogo Cadastrado!!!";
      return $params;
    } else {
      $params['error'] = "Erro as informações são inválidas!!!";
      return $params;
    }
  }

}
