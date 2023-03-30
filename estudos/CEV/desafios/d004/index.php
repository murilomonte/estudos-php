<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da conversão</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body> 
    <section>
    <h1>Conversor de moeda</h1>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            $data_inicio = date("m-d-Y", strtotime("-7 days"));
            $data_atual = date("m-d-Y");
            $data_conv = date("d/m/Y");

            function bcb_api($data_atual, $data_inicio) {
                $api = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$data_inicio'&@dataFinalCotacao='$data_atual'&" . '$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoVenda,dataHoraCotacao';
 
                // recebe o json fornecido pela api
                $json_data = file_get_contents($api);
    
                // decodifica e põe o json dentro de um array
                $response_data = json_decode($json_data, true); 
    
                // devolve o resultado
                return $response_data["value"][0]["cotacaoVenda"];   
            }

            $quantia = $_REQUEST["quantia"];

            //$quantia_conv = number_format($quantia, 2, ',', '.');
            $quantia_conv = numfmt_format_currency($padrao, $quantia, "BRL", );

            $cotacao = bcb_api($data_atual, $data_inicio);

            //$cotacao_conv = number_format($cotacao, 4, ',', '.');
            $cotacao_conv = numfmt_format_currency($padrao, $cotacao, "BRL");
            
            //$conversao = number_format($quantia / $cotacao, 2,  '.', ',');
            $conversao = numfmt_format_currency($padrao, $quantia / $cotacao, "USD" );
            
            echo "<p>Seus $quantia_conv equivalem a <strong>$conversao</strong></p>";
            echo "<p>*<strong>Cotação de $cotacao_conv informada no dia $data_conv pelo Banco Central do Brasil.</p>"
        ?>
        <button onClick="window.history.go(-1); return false;">Voltar</button>
    </section>
</body>
</html>