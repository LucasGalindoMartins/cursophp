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
                <h1>Resultado final</h1>
                <?php 
                    $num = $_GET["num"];
                    echo "O número escolhido foi <strong>$num</strong> <br>
                    <br>";
                    echo "O seu antecessor é " . $num - 1;
                    echo "<br>
                    <br>
                    O seu sucessor é " . $num + 1;
                ?>
                <br>
                <br>
                <a href="index.html">Voltar</a>
            </section>
        </main>
    </body>
</html>