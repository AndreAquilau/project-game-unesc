<?php


namespace Source\db;

use PDO,
    Source\Interfaces\DatabaseInterface;


class Database implements DatabaseInterface
{
    private static $instance;

    private static $options =  array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_LOWER,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    public static function getInstance() {

        if(!isset(self::$instance)) {

            try {

                self::$instance = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PASS, self::$options);

            } catch (\PDOException $e) {

                echo "Erro ao conectar: " . $e->getMessage();

            }
        }

        return self::$instance;
    }


}
