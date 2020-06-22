<?php

namespace Source\App\Model;


use Source\db\Database;
/*  Classe está herdando os métodos de database*/

class Usuario extends Database
{
    /* Atributos definidos como privado */
    private $usuario;
    private $senha;
    private $senhaConfirm;
    private $CPF;
    private $dataNascimento;
    private $dataCadastro;
    //private $tipo = 'usuário';
    public $errors = [];
    public $dadosUser;

      /* Função pública construtora para atribuir os dados encapsulados da classe */
    public function __construct($user = [])
    {
        $this->setUsuario($user['usuario']);
        $this->setSenha($user['senha']);
        $this->setSenhaConfirm($user['senhaConfirm']);
        $this->setUCPF($user['CPF']);
        $this->setDataNascimento($user['dtNascimento']);
        $this->setDataCadastro();
    }
    /* Função publica para retornar usuário */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /* Função publica para definir usuário */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

     /* Função publica para retornar senha*/
    public function getSenha()
    {
        return $this->senha;
    }

     /* Função publica para definir senha*/
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

     /* Função publica para retornar a confirmação da senha*/
    public function getSenhaConfirm()
    {
        return $this->senhaConfirm;
    }

     /* Função publica para definir a confirmação da senha*/
    public function setSenhaConfirm($senha)
    {
        $this->senhaConfirm = $senha;
    }

     /* Função publica para pegar cpf */
    public function getCPF()
    {
        return $this->CPF;
    }

     /* Função publica para definir o cpf*/
    public function setUCPF($CPF)
    {
        $this->CPF = $CPF;
    }

     /* Função publica para retornar a data de nascimento*/
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

     /* Função publica para definir data de nascimento*/
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /* Função publica para retornar a data de cadastro*/
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /* Função publica para pegar data de cadastro formatada*/
    public function setDataCadastro()
    {
        $data = date('Y-m-d');

        $this->dataCadastro = $data;
    }

    /* Função publica para executar a query sql e inserir um novo usuário ao banco de dados */
    public function registrar()
    {
        $instance = new Database();
        $conn = $instance->getInstance();

        $sql = ('INSERT INTO Usuario(usuario, password,data_nascimento,data_cadastro,cfp)' .
            " VALUES('" . $this->getUsuario() . "', '" . $this->getSenha() . "', '" . $this->getDataNascimento() . "', '" . $this->getDataCadastro() . "', '" . $this->getCPF() . "')");

            //echo $sql;
        if ($conn->exec($sql)) {
            return true;
        } else {
            array_push($this->errors, "Error ao cadastra o usuário tente novamente !!!");
        }
        return;
    }

    /* Função publica responsável por executar a query e retornar possui o usuário registrado no banco de dados */ 
    public function login()
    {

        $instance = new Database();
        $conn = $instance->getInstance();
        $usuario = $this->getUsuario();
        $senha = $this->getSenha();

        $sql = ('SELECT * FROM  Usuario WHERE usuario =\'' . $usuario . "'".' AND '.'password = \'' . $senha . "'");

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $dados = $stmt->fetchAll();

        if ($dados) {
            $this->dadosUser = $dados;
            return true;
        } else {
            array_push($this->errors, "Usuário ou senha inválidos!!!");
        }
    }

    /* Função publica para validar se os dados do formulário de cadastro estão corretos*/
    public function validarRegistro()
    {
        if (($this->getsenhaConfirm() !== $this->getsenha()) == 1) {
            array_push($this->errors, "As senhas estão incorretas!!!");
        }

        if (empty($this->usuario)) {
            array_push($this->errors, "O usuário não está em braco!!!");
        }
        if (empty($this->senha)) {
            array_push($this->errors, "A senha não está em braco!!!");
        }
        if (empty($this->CPF)) {
            array_push($this->errors, "O CPF não está em braco!!!");
        }
        if (empty($this->dataNascimento)) {
            array_push($this->errors, "A data de nascimento não está em braco!!!");
        }

        $instance = new Database();
        $conn = $instance->getInstance();

        $sql = ('SELECT * FROM  Usuario WHERE usuario =\'' . $this->getUsuario() . "'");

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $dados = $stmt->fetchAll();

        if (count($dados) === 0) {
            return true;
        } else {
            array_push($this->errors, "Usuário já cadastrado!!!");
        }
        
    }

}
