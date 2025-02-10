<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <main>
            <section>
                <h1>Conversor de Moedas v1.0</h1>

                <?php 
                    $saldo = $_GET["saldo"];
                    $dolar = 5.22;
                    $res = number_format($saldo/$dolar, 2, ',');

                    echo "Seus <strong>R$ $saldo</strong> equivalem a <strong>US$ $res</strong>. <br> <br>";
                    echo "<strong>*Cotação fixa de R$5,22*</strong> Informada diretamente no código."
                ?>
                <br>
                <br>
                <a href="index.html">Voltar</a>
            </section>
        </main>
    </body>
</html>