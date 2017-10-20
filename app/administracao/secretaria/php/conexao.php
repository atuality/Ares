<?php


$con=mysqli_connect("localhost","root","","ares");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

/*


define("USER", "root");
define("PASS", "");
define("HOST", "localhost");
define("DBNAME", "ares");

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

*/
?>