<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $porcentagem = $_GET['porcentagem'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="ipreco" value="<?=$preco?>">

            <label for="reajuste">Qual será o percentual de reajuste? (<?=$porcentagem?>%)</label>
            <input type="range" name="porcentagem" id="iporcentagem" min="0" max="100" step="1" value="<?=$porcentagem?>">
            <!-- precisa de javascript pra mostrar o numero em tempo real -->
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php 
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $resultado = (($porcentagem / 100) * $preco) + $preco;
            echo "O produto que custava " . numfmt_format_currency($padrão, $preco, "BRL" ) . ", com  <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrão, $resultado, "BRL" ) . "</strong> a partir de agora";
        ?>
    </section>
</body>
</html>