<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anatomia da Divisão</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $divid = $_GET['dividendo'] ?? 0;
            $divis = $_GET['divisor'] ?? 0;
        ?>
        <main>
            <h1>Anatomia de uma Divisão</h1>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="dividendo">Dividendo: </label>
                <input type="number" name="dividendo" id="idividendo" value="<?= $divid?>">

                <label for="divisor">Divisor: </label>
                <input type="number" name="divisor" id="idivisor" value="<?= $divis?>">

                <input type="submit" value="Analisar">

            </form>
        </main>

        <section id="res">
            <h2>Estrutura da Divisão</h2>
            <?php 
                $resto = $divid % $divis;
                $res = $divid / $divis;
                echo "$divid        ";
                echo "$divis<br>";
                echo "$resto        ";
                echo "$res"
            ?>
        </section>
    </body>
</html>