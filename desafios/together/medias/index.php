<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Raízes</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $valor1 = $_GET['v1'] ?? '';
            $peso1 = $_GET['p1'] ?? '';
            $valor2 = $_GET['v2'] ?? '';
            $peso2 = $_GET['p2'] ?? '';
        ?>
        <main>
            <h1>Médias Aritméticas</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="iv1" required step="0.01" value="<?= $valor1?>">

            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="ip1" required min="1" step="0.01" value="<?= $peso1?>">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="iv2" required step="0.01" value="<?= $valor2?>">

            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="ip2" required min="1" step="0.01" value="<?= $peso2?>">

            <input type="submit" value="Calcular Médias">

            </form>
        </main>

        <section id="res">
            <?php 
                $ma = ($valor1 + $valor2) / 2;
                $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
            ?>
            <h2>Cálculo das Médias</h2>
            <p>Analisando os valores <?= $valor1?> e <?= $valor2?>:</p>
            <ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($ma, 2, ',', '.')?>.</li>
                <li>A <strong>Média Aritmética Ponderada</strong> entre os valores é igual a <?= number_format($mp, 2, ',', '.')?>.</li>
            </ul>
        </section>
    </body>
</html>