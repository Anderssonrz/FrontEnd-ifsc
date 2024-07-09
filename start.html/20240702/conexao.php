<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "lojaonline";


$conexao = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conexao, "utf8");
if($conexao){
    echo "conexão estabeledida <br>";
}else{
    die("Erro de conexão: ".mysqli_connect_error());
}
?>
