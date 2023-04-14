<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calulador de salário</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <?php 
        $valor = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="isalario" value="<?=$valor?>" required>
            <p>Considerando o salário mínimo de <strong>R$1380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>    
    <section>
        <h2>Resultado Final</h2>
        <?php
            if ($valor == 0) {
                echo "Insira o seu salário.";
            } else {
                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                $salario = 1380;
                $quantiade = intdiv($valor, $salario);
                $restante = $valor % $salario;
    
    
                echo "<p>Quemm recebe um salário de" . numfmt_format_currency($padrão, $valor, "BRL" ) . " ganha <strong>" . numfmt_format_currency($padrão, $quantiade, "BRL" ). " salários mínimos</strong> + " . numfmt_format_currency($padrão, $restante, "BRL" ) . "</p>" ;
            }
        ?>
    </section>
</body>
</html>