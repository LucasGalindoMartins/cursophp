<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salário Mínimo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $min = 1518;
            $salario = $_GET['sal'] ?? $min;
        ?>
        <main>
            <h1>Informe seu salário</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

                <label for="sal">Salário (R$)</label>
                <input type="number" name="sal" id="isal" value="<?= $salario?>" step="0.01">

                <p>Considerando o salário mínimo de  <strong>R$<?=number_format($min, 2, ',', '.')?></strong></p>

                <input type="submit" value="Calcular">

            </form>
        </main>

        <section id="res">
            <h2>Resultado Final</h2>
            <?php 
                $tot = intdiv($salario, $min);
                $dif = $salario % $min;

                echo "<p>Ganha $tot salários mínimos + R$ ". number_format($dif, 2, ',', '.').".</p>";
            ?>
        </section>
    </body>
</html>