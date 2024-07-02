<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "lojaonline";

$conexao = mysqli_connect($host, $user, $password, $database);

mysqli_set_charset($conexao, "utf8");
if($conexao){
    echo "Conexao conectada com sucesso <br>";

}else{
    die("Erro da conexao" . mysqli_connect_error());
}
