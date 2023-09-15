<?php 
require_once ("config.php");

$sql_tabela = "CREATE TABLE pedidos(
    id_pedido INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    data VARCHAR(15) NOT NULL,
    valor INT(100) NOT NULL,
    status VARCHAR(50) NOT NULL


    )
    ";

$sql_insert = "INSERT INTO pedidos VALUES(NULL, '2023-04-05', 450, 'pendente' ), (NULL, '2021-07-15', 780, 'pago' ), (NULL, '2020-10-25', 1300, 'atrasado' ), (NULL, '2023-01-14', 100, 'pendente' ), (NULL, '2021-09-05', 784, 'pago' ) ";

$sql_select = "SELECT *  FROM pedidos ";


$pedidos = $conexao->query($sql_select);


while ($lista = $pedidos ->fetch_assoc()) {
    if (str_contains($lista["data"], '2023'))  {
        echo $lista["data"] .PHP_EOL;
        echo $lista["valor"] .PHP_EOL;
        echo $lista["status"] .PHP_EOL;
        echo ("<br>");
    }
   
    
}


?>