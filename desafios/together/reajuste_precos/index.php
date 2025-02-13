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
            $p = $_GET['preco'] ?? '0';
            $porc = $_GET['reaj']?? '0';
        ?>
        <main>
            <h1>Reajustador de Preços</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="preco">Preço do Produto (R$)</label>
                <input type="number" name="preco" id="ipreco" value="<?=$p?>">

                <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
                <input type="range" name="reaj" id="ireaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porc?>">

                <input type="submit" value="Reajustar">

            </form>
        </main>

        <section id="res">
            <?php 
                $res = $p + (($p * $porc) / 100);
            ?>
            
            <h2>Resultado do Reajuste</h2>
            <p>O produto que custava R$<?= $p?>, com <strong><?=$porc?>% de aumento</strong> vai passar a custar <strong>R$<?=$res?></strong> a partir de agora.</p>
        </section>

        <script>
            mudaValor()

            function mudaValor()
            {
                p.innerText = ireaj.value
            }
        </script>
    </body>
</html>