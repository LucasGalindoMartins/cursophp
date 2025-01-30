<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <main>
            <section>
                <h1>Obrigado por preencher o formulário!!</h1>
                <p>Esses são seus dados:</p>
                <?php
                    $email = $_POST["email"] ?? "Não possui email cadastrado!!";
                    $senha = $_POST["senha"?? "Não possui senha cadastada!!"];
                    echo "<p>Email: <strong>$email</strong></p>
                    <p>Senha: <strong>$senha</strong></p>";
                ?>
                <a href="login.html">Voltar para página anterior</a>
            </section>
        </main>
    </body>
</html>