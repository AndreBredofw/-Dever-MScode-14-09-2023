<?php 
require_once("banco.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST["flogin"];
    $password= $_POST["password_login"];

    $sql_consulta = "SELECT *  FROM cadastro WHERE email = '$login' ";
    $resultado = $conexao->query($sql_consulta);

    if ($resultado -> num_rows === 1) {
        $lista = $resultado->fetch_assoc();
        if (password_verify($password, $lista["senha"])) {
            echo "Login realizado com sucesso!";
        }else {
            echo "Senha incorreta, tente novamente!";
        }
    }else{
        echo "Usuário não encontrado, realize o seu cadastro!";
    }

    $conexao->close();

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <label for="email">Digite seu email:</label>
        <input type="email" name="flogin" required> <br>

        <label for="senha">Digite a sua senha:</label>
        <input type="password" name="password_login"><br>

        <button type="submit">Entrar</button>
        <button type="button" onclick="location.href='cadastro.php' ">Cadastre-se</button>

    </form>
    </div>
</body>
</html>