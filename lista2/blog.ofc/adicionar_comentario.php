<?php
require_once("conex.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $comentario = $_POST["comentario"];

   
    $conexao = new mysqli("localhost", "root", "", "blog");

   
    if ($conexao->connect_error) {
        die("A conexão falhou: " . $conexao->connect_error);
    }

    $sql = "INSERT INTO comentarios (nome, comentario) VALUES ('$nome', '$comentario')";
    
    if ($conexao->query($sql) === TRUE) {
        echo "Comentário adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar comentário: " . $conexao->error;
    }

    $conexao->close();
}
?>


