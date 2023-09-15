<?php 
require_once ("config.php");

$sql_tabela = "CREATE TABLE funcionarios(
    id_funcionario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50)  NOT NULL,
    cargo VARCHAR (30) NOT NULL

    )
    ";

$sql_insert = "INSERT INTO funcionarios VALUES(NULL, 'André', 'Prefeito'), (NULL, 'Diogo', 'Programador'), (NULL, 'Hiago', 'Gerente'), (NULL, 'Gabriel', 'Professor') ";

$sql_select = "SELECT *  FROM  funcionarios WHERE cargo = 'Gerente' ";

 $funcionarios = $conexao ->query($sql_select);

while ($lista = $funcionarios->fetch_assoc()) {
    echo  $lista["nome"] .PHP_EOL;
    echo  $lista ["cargo"];
    echo "<br>";
};


?>