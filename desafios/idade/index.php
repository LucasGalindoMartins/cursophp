<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculo de Idade</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $year = $_GET['ano'] ?? 0;
            $wyear = $_GET['ano_idade'] ?? 0;
        ?>
        <main>
            <h1>Calculando a sua idade</h1>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="ano">Em que ano você nasceu?</label>
                <input type="number" name="ano" id="iano" value="<?= $year?>">

                <label for="ano_idade">Quer saber sua idade em que ano? (Atualmente estamos em <strong>2025</strong>)</label>
                <input type="number" name="ano_idade" id="iano_idade" value="<?= $wyear?>">

                <input type="submit" value="Qual será minha idade?">
            </form>
        </main>

        <section id="res">
            <h2>Resultado</h2>
            <?php 
                $idade = $wyear - $year;

                echo "Quem nasceu em $year vai ter <strong>$idade</strong> anos em $wyear!";
            ?>
        </section>
    </body>
</html>