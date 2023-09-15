<?php 
require_once ("banco.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome =$_POST["name"];
    $email =$_POST["email"];
    $senha =$_POST["password"];
    $senha =password_hash($_POST["password"], PASSWORD_DEFAULT);

    $conexao = new mysqli("localhost", "root", "", "agosto");
    
    /*
    if ($conexao->connect_error) {
        die("A conexão falhou: ".$conexao->connect_error );
    }

    */


    $sql_cadastro = "INSERT INTO cadastro (nome, email, senha) VALUES('$nome', '$email', '$senha')";

    if ($conexao->query($sql_cadastro) ===TRUE) {
       echo "Cadastro realizado com sucesso!";
        
    }else {
        echo "Erro na consulta" .$sql_cadastro ."<br>" .$conexao->error;
    }

    $conexao->close();

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
   <form action="" method="post">
    <label for="name">Digite o seu nome:</label>
    <input type="text" name="name" required>

    <label for="email">Digite o seu email:</label>
    <input type="email" name="email" required>

    <label for="password">Digite a sua senha:</label>
    <input type="password" name="password" required>

    <button type="submit" name="cadastro">Cadastrar-se</button> 
   
    <button type="button" onclick="location.href= 'login.php' ">Fazer Login</button>

   </form> 
   </div>
</body>
</html>