<?php

namespace Source\App\Model;

use Source\db\Database;

class Biblioteca
{
/*Inicia a função construtora*/
  public function __construct()
  {

  }

/* Função publica que executa a query do banco de dados para buscar os jogos da biblioteca do usuario*/
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
/* Função publica que executa a query do banco de dados para buscar um jogo*/
  public function viewGame($id_jogo, $id_usuario, $usuario) {
    $instance = new Database();
    $conn = $instance->getInstance();

    //$sql = ('SELECT * FROM  user_biblioteca WHERE ID_JOGO =\'' . $id_jogo . "'" . ' AND ' . 'ID_USUARIO = \'' . $id_usuario . "'" . ' AND ' . 'usuario = \'' . $usuario . "'");
    $sql = (" SELECT * , id AS id_jogo, id_usuario AS id_desenvolvedor FROM Jogo WHERE id = $id_jogo");
    //echo $sql;
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $dados = $stmt->fetchAll();

    //print_r($dados);

    return $dados;
  }
/* Função publica que executa a query do banco de dados para excluir o jogo*/
  public function deleteGame ($id_usuario, $id_jogo, $id_biblioteca = []){
    $instance = new Database();
    $conn = $instance->getInstance();

    $sql = ("DELETE FROM Biblioteca WHERE id_usuario = $id_usuario AND id_jogo = $id_jogo");
    //echo $sql;
 

    $stmt = $conn->prepare($sql);
    
    $stmt->execute();  
    if($stmt->rowCount() > 0){
      return true;
    } else {
      return false;
    }
  }
/* Função publica que executa a query do banco de dados para adicionar o jogo na biblioteca do usuario*/
  public function addGame($id_usuario, $id_jogo)
  {
    $instance = new Database();
    $conn = $instance->getInstance();
    $sql = "SELECT * FROM Biblioteca WHERE id_usuario = $id_usuario AND id_jogo = $id_jogo";
    $stmt = $conn->prepare($sql);
    $stmt->execute(); 

    if($stmt->rowCount() == 0){
      $sql = ('INSERT INTO Biblioteca(id_usuario, id_jogo)' ." VALUES(".$id_usuario.", ".$id_jogo.")");
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      return true;
    } else {
      return true;
    }


  }


}
