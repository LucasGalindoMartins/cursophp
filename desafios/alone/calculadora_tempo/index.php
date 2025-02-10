<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de tempo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $t = $_GET['time'] ?? 0;
        ?>
        <main>
            <h1>Calculadora de tempo</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="time">Qual é o total de segundos?</label>
                <input type="number" name="time" id="itime" value="<?=$t?>">

                <input type="submit" value="Calcular">
            </form>
        </main>

        <section id="res">
            <h2>Totalizando tudo</h2>
            <?php 

                echo "Analisando o valor que digitou, <storng>$t segundos</strong> equivalem a um total de:<br>";
                echo "<ul><li> semanas</li>";
                echo "<br><li> dias</li>";
                echo "<br><li> horas</li>";
                echo "<br><li> minutos</li>";
                echo "<br><li> segundos</li>";
            ?>
        </section>
    </body>
</html>