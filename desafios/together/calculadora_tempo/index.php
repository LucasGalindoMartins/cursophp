<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de Tempo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $totals = $_GET['tots'] ?? 0;
        ?>
        <main>
            <h1>Calculadora de Tempo</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="tots">Qual o total de segundos?</label>
                <input type="number" name="tots" id="itots" min="0" value="<?=$totals?>">

                <input type="submit" value="Calcular">

            </form>
        </main>

        <section>
            <?php 
                //Cálculos
                $sem = (int)($totals / 604800);
                $rsem = $totals % 604800;

                $dia = (int)($rsem / 86400);
                $rdia = $rsem % 86400;

                $hora = (int)($rdia / 3600);
                $rhora = $rdia % 3600;

                $min = (int)($rhora / 60);
                $seg = $rhora % 60;
                
            ?>
            <h2>Totalizando tudo</h2>
            <p>Analisando o valor que você digitou, <strong><?=number_format($totals, 0, ',', '.')?> segundos</strong> equivalem a um total de:</p>
            <ul>
                <li><?= $sem?> semanas</li>
                <li><?= $dia?> dias</li>
                <li><?= $hora?> horas</li>
                <li><?= $min?> minutos</li>
                <li><?= $seg?> segundos</li>
            </ul>
        </section>
    </body>
</html>