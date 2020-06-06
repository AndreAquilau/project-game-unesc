<?php
namespace Source\Interfaces;

interface UserInterface
{
    public function getName();
    public function setName($name);
    public function getEmail();
    public function setEmail($email);
    public function listar();
    public function novo();
    public function editar($id);

}