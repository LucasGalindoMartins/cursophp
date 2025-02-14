<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caixa Eletrônico</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .nota
            {
                height: 50px;
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <?php 
            $saque = $_GET['valor'] ?? 0;
        ?>
        <main>
            <h1>Caixa Eletrônico</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="valor">Qual valor você deseja sacar? (R$)</label>
                <input type="number" name="valor" id="ivalor" step="5" value="<?=$saque?>">

                <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p> 
                
                <input type="submit" value="Sacar">
            
            </form>
        </main>

        <section id="res">
            <?php 
                $resto = $saque;

                $cem = floor($resto / 100);
                //$resto = $resto % 100;
                $resto %= 100;

                $cinq = floor($resto / 50);
                $resto = $resto % 50;

                $dez = floor($resto / 10);
                $resto = $resto % 10;

                $cinc = floor($resto/5);
            ?>
            <h2>Saque de <?=$saque?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img src="img/100-reais.jpg" class="nota"> x<?= $cem?></li>
                <li><img src="img/50-reais.jpg" class="nota"> x<?= $cinq?></li>
                <li><img src="img/10-reais.jpg" class="nota"> x<?= $dez?></li>
                <li><img src="img/5-reais.jpg" class="nota"> x<?= $cinc?></li>
            </ul>
        </section>
    </body>
</html>