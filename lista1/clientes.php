<?php 
require_once ("config.php");

$sql_tabela = "CREATE TABLE clientesAT1(
    id_cliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    idade INT NOT NULL


    )
    ";

$sql_insert = "INSERT INTO clientesAT1 VALUES(NULL, 'Pedro', 50), (NULL, 'Fábio', 10), (NULL, 'Diogo', 15)"; 

$pedidos = $conexao->query($sql_insert);
$clientes = $conexao->query("SELECT  * FROM clientesAT1 WHERE idade > 30");

while ($lista = $clientes->fetch_assoc()) { 
    echo $lista["nome"];
    echo $lista["idade"];
    echo "<br>";
}

?>

