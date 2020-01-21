<?php

namespace App\DAO;

abstract class Conexao
{
    protected $pdo;

    public function __construct()
    {
        $host = "localhost";
        $user = "";
        $pass = "";
        $dbname = "";

        $dsn = "mysql:host={$host};dbname={$dbname}";

        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }
}