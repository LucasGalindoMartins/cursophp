<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Média Aritmética</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $valor1 = $_GET['v1'] ?? 0;
            $valor2 = $_GET['v2'] ?? 0;
            $peso1 = $_GET['p1'] ?? 0;
            $peso2 = $_GET['p2'] ?? 0;
        ?>
        <main>
            <h1>Médias Aritméticas</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
                <label for="v1">Valor 1: </label>
                <input type="number" name="v1" id="iv1" value="<?= $valor1?>">

                <label for="p1">Peso 1: </label>
                <input type="number" name="p1" id="ip1" min="1" value="<?= $peso1?>">

                <label for="v2">Valor 2: </label>
                <input type="number" name="v2" id="iv2" value="<?= $valor2?>">

                <label for="p2">Peso 2: </label>
                <input type="number" name="p2" id="ip2" min="1" value="<?= $peso2?>">

                <input type="submit" value="Calcular Médias">
            </form>
        </main>

        <section id="res">
            <h2>Cálculo das Médias</h2>
            <?php 
            $medias = ($valor1 + $valor2)/2;
            $ms = number_format($medias, 2, ',', '.');
            $mediap = (($valor1 * $peso1) + ($valor2 * $peso2))/ ($peso1 + $peso2);
            $mp = number_format($mediap, '2', ',', '.');

            echo "Analisando os valores <strong>$valor1 e $valor2:</strong>";
            echo "<br><ul> <li>A <strong> Média Aritmética Simples</strong> entre os valores é igual a <strong>$ms</strong></li>";
            echo "<br><li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $mp</li>";
            
            ?>
        </section>
    </body>
</html>