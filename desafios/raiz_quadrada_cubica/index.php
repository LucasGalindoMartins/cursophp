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
            $n = $_GET['num'] ?? 0;
        ?>
        <main>
            <h1>Informe um número</h1>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="num">Número: </label>
                <input type="number" name="num" id="inum" value="<?= $n?>">

                <input type="submit" value="Calcular Raízes">
            </form>
        </main>

        <section id="res">
            <h2>Resultado Final</h2>
            <?php 
                $raiz2 = $n ** (1/2);
                $raiz3 = $n ** (1/3);
                $r2 = number_format($raiz2, 3, ',', '.');
                $r3 = number_format($raiz3, 3, ',', '.');


                echo "Analisando o <strong>número $n</strong>, temos:";
                echo "<br><ul> <li> A sua raíz quadrada é <strong>$r2</strong></li>";
                echo "<li>A sua raíz cúbica é <strong>$r3</strong></li></ul>";
            ?>
        </section>
    </body>
</html>