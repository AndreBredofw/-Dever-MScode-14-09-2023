<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meu Blog</title>
</head>
<body>
    <header>
        <h1>Meu Blog</h1>
    </header>
    
    <main>
        <article>
            <h2>Comentários Exercícios agosto</h2>
            <p>Aqui está o conteúdo do meu artigo...</p>
        </article>

        <section id="comentarios">
            <h2>Comentários</h2>

            <form action="adicionar_comentario.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <br>
                <label for="comentario">Comentário:</label>
                <textarea id="comentario" name="comentario" rows="4" required></textarea>
                <br>
                <input type="submit" value="Adicionar Comentário">
            </form>

            <?php
             include 'exibir_comentario.php'; 
            ?>
        </section>
    </main>
</body>
</html>
