<?php 
$host = "localhost";
$user = "root";
$password = "";
$banco = "agosto";
$conexao = new mysqli($host, $user, $password, $banco); 


if ($conexao->connect_error){
    die("Conexão Falho:" .$conexao->connect_error);  
}else {
    echo "A conexão Funcionou!";
    echo "<br>";
}


?>