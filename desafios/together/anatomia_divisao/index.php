<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anatomia de uma divisão</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $d1 = $_GET['dividendo'] ?? 0;
            $d2 = $_GET['divisor'] ?? 1;
        ?>
        <main>
            <h1>Anatomia de uma divisão</h1>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="idividendo" min="0" value="<?= $d1?>">

                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="idivisor" min="1" value="<?= $d2?>">

                <input type="submit" value="Analisar">

            </form>
        </main>

        <section id="res">
            <h2>Estrutura da Divisão</h2>
            <?php 
                $quo = intdiv($d1, $d2);
                $resto = $d1 % $d2;
            ?>

            <table class="divisao">
                <tr>
                    <td><?= $d1?></td>
                    <td><?= $d2?></td>
                </tr>
                <tr>
                    <td><?= $resto?></td>
                    <td><?= $quo?></td>
                </tr>
            </table>
        </section>
    </body>
</html>