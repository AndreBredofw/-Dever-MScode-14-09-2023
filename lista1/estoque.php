<?php 
require_once ("config.php");

$sql_tabela = "CREATE TABLE produtinhos(
    id_produto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    quantidade_estoque INT NOT NULL


    )
    ";

$sql_insert = "INSERT INTO produtinhos VALUES(NULL, 'Caneta Bic', 50), (NULL, 'Lápis', 150), (NULL, 'Borracha', 15)"; 
 
$sql_select = "SELECT *  FROM produtinhos";


$pedidos = $conexao->query($sql_select);

while ($lista = $pedidos->fetch_assoc()) { 
    echo $lista["nome"] .PHP_EOL;
    echo $lista["quantidade_estoque"];
    echo "<br>";
}

if (isset($_POST["update"]) && !empty($_POST["name"]) && !empty($_POST["estoque"]) || !empty($_POST["id"]) ) {
    $nome = $_POST["name"]; 
    $estoque = $_POST["estoque"];
    $id = $_POST["id"];
    $sql_update = $conexao->query("UPDATE produtinhos SET nome = '$nome', quantidade_estoque = '$estoque'  WHERE id_produto = '$id' ");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" placeholder="Nome" name="name">
    <input type="number" placeholder="Estoque" name="estoque">
    <input type="number" name="id" >
    <button type="submit" name="update">Update</button>


    </form>
</body>
</html>