<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Número Aleatório</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <main>
            <section>
                <h1>Trabalhando com números aleatórios</h1>

                <p>Gerando um número aleatório entre 0 e 100...</p>
                <?php 
                    $num = mt_rand(1,100);
                    echo "O valor gerado foi <strong>$num</strong>";
                ?>
                <br>
                <br>
                <a href="index.php">Gerar outro</a>
            </section>
        </main>
    </body>
</html>