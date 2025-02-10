<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <main>
            <section>
                <h1>Conversor de Moedas v1.0</h1>

                <?php 
                    $saldo = $_GET["saldo"] ?? 0;

                    $ini = date("m-d-Y", strtotime("-7 days"));
                    $fim = date("m-d-Y");
            
                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $ini .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
                    $dados = json_decode(file_get_contents($url), true);
            
                    $cotacao = $dados["value"][0]["cotacaoCompra"];

                    $res = number_format($saldo/$cotacao, 2, ',');

                    echo "Seus <strong>R$ $saldo</strong> equivalem a <strong>US$ $res</strong>. <br> <br>";
                    echo "Cotação obtida diretamente do site do <strong>Banco Central do Brasil.</strong>"
                ?>
                <br>
                <br>
                <a href="index.html">Voltar</a>
            </section>
        </main>
    </body>
</html>