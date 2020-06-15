<?php

namespace Source\App\Model;


use Source\db\Database;

class Usuario extends Database
{
    private $usuario;
    private $senha;
    private $CPF;
    private $dataNascimento;
    private $dataCadastro;
    private $tipo = 'usuário';

    public function __construct($user = []){
        $this->setUsuario($user['usuario']);
        $this->setSenha($user['senha']);
        $this->setUCPF($user['CPF']);
        $this->setDataNascimento($user['dtNascimento']);
        $this->setDataCadastro();

    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getCPF(){
        return $this->CPF;
    }

    public function setUCPF($CPF){
        $this->CPF = $CPF;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataCadastro(){
        return $this->dataCadastro;
    }

    public function setDataCadastro(){
        $data = date('Y-m-d');
    
        $this->dataCadastro = $data;
    }

    public function registrar(){
        $instance = new Database();
        $conn = $instance->getInstance();

        $sql =('INSERT INTO Usuario(usuario, password,data_nascimento,data_cadastro,CFP,tipo)'.
        " VALUES('".$this->getUsuario()."', '".$this->getSenha()."', '".$this->getDataNascimento()."', '".$this->getDataCadastro()."', '".$this->getCPF()."', '".$this->tipo."')");

        if($this->validar()){
            if($conn->exec($sql)){
                return true;
            } else{
                return false;
            }
            return;
        } else {
            return false;
        }
        
    }

    static public function login($usuario, $senha){
        $instance = new Database();
        $conn = $instance->getInstance();
        $retorno = 'id, usuario, CPF, data_nascimento, estudio, descricao, tipo';
        
        $sql = ("SELECT $retorno  FROM usuario WHERE usuario = '$usuario' and password = '$senha'");
        

        $stmt = $conn->prepare($sql);
   
        if($stmt->execute()){
            return $stmt->fetchAll();
        } else{
            return false;
        }
        
    }

    public function validar(){
   
        if(empty($this->usuario)){
            return false;
        }
        if(empty($this->senha)){
            return false;
        }
        if(empty($this->CPF)){
            return false;
        }
        if(empty($this->dataNascimento)){
            return false;
        }

        $instance = new Database();
        $conn = $instance->getInstance();

        $sql =('SELECT * FROM  Usuario WHERE usuario =\''.$this->getUsuario()."'");

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        $dados = $stmt->fetchAll();
       
        if(count($dados) === 0){
            return true;
        } else{
            return false;
        }

    }

}