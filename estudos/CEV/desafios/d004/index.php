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
            $data = date("m-d-Y");
            $data_conv = date("d/m/Y");

            function bcb_api($data_atual) {
                $api = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='$data_atual'&".'$top=100&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
                
                // recebe o json fornecido pela api
                $json_data = file_get_contents($api);
    
                // decodifica e põe o json dentro de um array
                $response_data = json_decode($json_data, true); 
    
                // devolve o resultado
                return $response_data["value"][0]["cotacaoCompra"];   
            }

            $quantia = $_REQUEST["quantia"];
            $quantia_conv = number_format($quantia, 2, ',', '.');

            $cotacao = bcb_api($data);
            $cotacao_conv = number_format($cotacao, 4, ',', '.');
            
            $conversao = number_format($quantia / $cotacao, 2,  '.', ',');

            echo "<p>Seus RS$$quantia_conv equivalem a <strong>US$$conversao</strong></p>";
            echo "<p>*<strong>Cotação de R$$cotacao_conv informada no dia $data_conv pelo Banco Central do Brasil.</p>"
        ?>
        <button onClick="window.history.go(-1); return false;">Voltar</button>
    </section>
</body>
</html>