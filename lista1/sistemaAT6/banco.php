<?php 

$host = "localhost";
$user = "root";
$password = "";
$banco = "agosto";
$conexao = new mysqli($host, $user, $password, $banco); 

/*
if ($conexao->connect_error) {
    die("A conexão falhou:" .$conexao->connect_error);
    
}else {
    echo "A conexão funcionou!";
}
*/


?>