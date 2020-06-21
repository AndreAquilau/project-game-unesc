<?php

namespace Source\App\Model;

use Source\db\Database;

class Perfil
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

    $instance = new Database();
    $conn = $instance->getInstance();

    $usuario = $this->usuario;
    $id = $this->id;

    $sql = ('SELECT * FROM  Usuario WHERE usuario =\'' . $usuario . "'" . ' AND ' . 'id = \'' . $id . "'");

    //echo $sql;
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $dados = $stmt->fetchAll();

    return $dados[0];

  }

  public function putPerfil($params) {
  
    $instance = new Database();
    $conn = $instance->getInstance();
  
    $sql = "UPDATE Usuario SET  usuario = '".$params['usuario']."', password = '".$params['password']."', cfp = '".$params['CPF']."', data_nascimento = '".$params['data_nascimento']."' WHERE id = ".$params['id']." AND password = "."'".$params['password']."'";
  
    //echo $sql;


      $stmt = $conn->prepare($sql);
    
      $stmt->execute();
         
      if($stmt->rowCount() > 0){
        
        $params['success'] = "Usuário Alterado Com Sucesso!!!";
        $params["cfp"] = $params["CPF"];
        return $params;
      } else {
        $params['error'] = "Erro as informções são inválidas!!!";
        $params["cfp"] = $params["CPF"];
        return $params;
      }

      return $dados;
    }

}
