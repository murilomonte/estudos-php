<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da análise</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <section>
        <h1>Analisador de número real</h1>
        <?php 
            $numero = $_REQUEST["numero"] ?? 0;
            $inteiro = (int) $numero;
            $fracionaria = number_format($numero - $inteiro, 3,',');
            echo "Analisando o número <strong>$numero</strong> informado pelo usuário:";
            echo "<ul>";
            echo "<li>A parte inteira do número é <strong>$inteiro</strong></li>";
            echo "<li>A parte fracionária do número é <strong>$fracionaria</strong></li>";
            echo "</ul>"
        ?>
        <button onClick="window.history.go(-1); return false;">Voltar</button>
    </section>
</body>
</html>