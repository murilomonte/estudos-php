<!DOCTYPE html>
<html lang="pt-br">
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
            $quantia = $_REQUEST["quantia"];
            $cotacao = 5.28;
           
            $conversao = number_format($quantia * (1 / $cotacao), 2);

            echo "<p>Seus RS$$quantia equivalem a <strong>US$$conversao</strong></p>";
            echo "<p>*<strong>Cotação fixa de R$$cotacao informada diretamente no código.</p>"
        ?>
    </section>
</body>
</html>