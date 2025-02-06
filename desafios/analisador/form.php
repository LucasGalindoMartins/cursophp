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
                <h1>Analisador de Número Real</h1>

                <?php 
                    $num = $_GET["num"] ?? 0;
                    $full = (int) $num;
                    $fra = number_format($num - $full, 3 , ',');
                    $number = number_format($num, 3 , ',', '.');

                    echo "Analisando o número <strong>$number</strong> informado pelo usuário: <br> <br>";

                    echo "- A parte inteira do número é $full <br>";
                    echo "- A parte fracionária do número é $fra";
                ?>
                <br>
                <br>
                <button onclick="javascript:history.go(-1)">Voltar</button>
            </section>
        </main>
    </body>
</html>