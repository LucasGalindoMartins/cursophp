<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reajustador de Preços</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $price = $_GET['preco'] ?? 0;
            $perc = $_GET['per'] ?? 0;
        ?>
        <main>
            <h1>Reajustador de Preços</h1>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="preco">Preço do Produto (R$)</label>
                <input type="number" name="preco" id="ipreco" <?= $price?>>

                <label for="per">Qual será o percentual de reajuste? (<?= $perc?>)</label>
                <input type="range" name="per" id="iper" min="0" max="100" value="<?= $perc?>">
                
                <input type="submit" value="Reajustar">
            </form>
        </main>

        <section>
            <h2>Resultado do Reajuste</h2>
            <?php 
                $preco_final = ($price * $perc/100) + $price;
                $pf = number_format($preco_final, '2', ',', '.');

                echo "O produto que custava R$".number_format($price, '2', ',', '.').", com $perc de aumento vai passar a custar R$$pf  a partir de agora.";
            ?>
        </section>
    </body>
</html>