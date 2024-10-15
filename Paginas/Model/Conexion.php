<?php

namespace app\Model;

use PDO;

abstract class Conexion
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}