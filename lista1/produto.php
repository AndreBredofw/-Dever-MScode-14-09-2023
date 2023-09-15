<?php 

require_once ("config.php");

$sql_tabela = "CREATE TABLE produtos(
	id_produto INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    preco INT(100) NOT NULL
	) ";

$sql_insert = "INSERT INTO produtos (nome, preco) VALUES ('1KG Maçã', 10), ('5KG Melancia', 52), ('4KG Frango', 50), ('4KG Abacate', 62)" ;

$sql_select =  "SELECT * FROM produtos WHERE preco <= 50" ; 

$produtos = $conexao->query($sql_select);



while ($lista = $produtos->fetch_assoc()) { 
    echo $lista["nome"];
    echo $lista["preco"];
    echo "<br>";
}




?>