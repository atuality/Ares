<?php
define("USER", "u848232879_root");
define("PASS", "123456");
define("HOST", "mysql.hostinger.com.br");
define("DBNAME", "u848232879_staua");

//CONEXAO COM O BANCO DE DADOS
function conectar() {
    $dsn = "mysql:host=" . HOST . ";dbname=" . DBNAME . "";
    try {
        $conectar = new PDO($dsn, USER, PASS);
        $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco " . $e->getMessage();
    }
    return $conectar;
}