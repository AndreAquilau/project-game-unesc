<?php

namespace Source\App\Model;

use Source\db\Database;
/* Classe para representar o jogo */
class Game
{
  /* Atributos privados */
  private $id;
  private $usuario;
  private $errors = [];

  /* Função pública construtora para atribuir os dados corretos da classe Jogo */
  public function __construct($id = [], $usuario = [])
  {
    $this->id = $id;
    $this->usuario = $usuario;
  }


  public function getPerfil()
  {



  }

  /* Função publica para executar a query sql para inserir um jogo no banco de dados */
  public function postGame($params) {
  
    $instance = new Database();
    $conn = $instance->getInstance();

    $this->validar($params);

    if(count($this->errors) > 0 ){
      $params['errors'] = $this->errors;
      return $params;
    }

    $sql = ('INSERT INTO jogo(titulo, descricao,thumb_url,dowload_url,dispositivo, id_usuario)' .
    " VALUES('" . $params['titulo'] . "', '" . $params['descricao'] . "', '" . $params['thumb_url'] ."', '" . $params['dowload_url'] . "', '" . $params['dispositivo'] . "', '" . $params['id_usuario'] . "')");

    //echo $sql;
 

   

    $stmt = $conn->prepare($sql);
    
    $stmt->execute();  
    if($stmt->rowCount() > 0){

      $id = $conn->lastInsertId(); 
      $sql = ('INSERT INTO Biblioteca(id_Usuario, id_Jogo)' ." VALUES(".$params['id_usuario'].", ".$id.")");
      $stmt = $conn->prepare($sql);
      $stmt->execute(); 

      if($stmt->rowCount() > 0){
        //echo $sql;
        $params['success'] = "Jogo Cadastrado!!!";
        return $params;
      } else {
        $params['errors'] = "Erro as informações são inválidas!!!";
        return $params;
      }

    } else {
      $params['errors'] = "Erro as informações são inválidas!!!";
      return $params;
    }
  }
/* Função publica que executa a query do banco de dados para excluir o jogo*/

  public function deleteGame($id_jogo)
  {

      $instance = new Database();
      $conn = $instance->getInstance();
  
      $sql = ("DELETE FROM Jogo WHERE id = $id_jogo");
  
      //echo $sql;
   
      $stmt = $conn->prepare($sql);
      
      $stmt->execute();  
      if($stmt->rowCount() > 0){
          return true;
      } else {
          return false;
      }
  }
/* Função publica que valida os dados dos jogos*/

  public function validar($dados){

  if (empty($dados['titulo'])) {
      array_push($this->errors, "O Título não está em braco!!!");
  };
  if (empty($dados['descricao'])) {
      array_push($this->errors, "A Descriçao não está em braco!!!");
  };
  if (empty($dados['thumb_url'])) {
      array_push($this->errors, "Selecione a Thumbnail!!!");
  }
  if (empty($dados['dowload_url'])) {
      array_push($this->errors, "A URL Download não está em braco!!!");
  };
  if (empty($dados['dispositivo'])) {
    array_push($this->errors, "Selecione o Dispositivo!!!");
  };
}
/* Função publica que executa a query do banco de dados para retornar todos os dados dos jogos do sistema*/

  public function gameAll(){
    $instance = new Database();
    $conn = $instance->getInstance();

    $sql = ("SELECT * FROM Jogo ORDER BY  id DESC");

    //echo $sql;
 
    $stmt = $conn->prepare($sql);
    
    $stmt->execute();  
    if($stmt->rowCount() > 0){
        $dados = $stmt->fetchAll();
        return $dados;
    } else {
        return false;
    }
  }

}
