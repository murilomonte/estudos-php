<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=  , initial-scale=1.0">
    <title>Números aleatórios</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $randNum = rand(0, 100);
            echo "O valor gerado foi $randNum";
        ?>
        <!-- esse botão utiliza uma função javascript -->
        <button onClick="window.location.reload();">Gerar outro</button>
    </section>
</body>
</html>