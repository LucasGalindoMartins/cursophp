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
            $sal = $_GET['salario'] ?? 0;
        ?>
        <main>
            <h1>Informe seu salário</h1>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="salario">Salário (R$): </label>
                <input type="number" name="salario" id="isalario" value="<?=$sal?>">

                <p>Considerando o salário mínimo de <strong>R$1.518,00</strong></p>

                <input type="submit" value="Calcular">

            </form>
        </main>

        <section id="res">
            <h2>Resultado Final</h2>
            <?php 
                $quan = $sal / 1518;
                $num = (int) $quan;
                $resto = $sal % 1518;
                echo "Quem recebe um salário de R$".number_format($sal, 2, ',', '.')." ganha <strong> $num salários mínimos + </strong>R$ ".number_format($resto, 2, ',').".";
            ?>
        </section>
    </body>
</html>