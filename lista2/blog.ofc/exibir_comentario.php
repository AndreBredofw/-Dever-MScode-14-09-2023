<?php
require_once("conex.php");
$conexao = new mysqli("localhost", "root", "", "blog");

if ($conexao->connect_error) {
    die("A conexão falhou: " . $conexao->connect_error);
}


$sql = "SELECT nome, comentario FROM comentarios";

$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>{$row["nome"]}:</strong> {$row["comentario"]}</p>";
    }
} else {
    echo "Nenhum comentário encontrado.";
}


$conexao->close();
?>

