<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de raiz quadrada</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="inumero" value="<?=$numero?>">
            <input type="submit" value="Calcular raizes">
        </form>
    </main>
    <section>
        <?php 
            if ($numero == 0) {
                echo "Digite um número";
            } else {
                $quadrada = number_format($numero ** (1/2), 3, ',', '.');
                $cubica = number_format($numero ** (1/3), 3, ',', '.');
                echo "Analisando o <strong>número $numero</strong>, temos:";
                echo "<ul>";
                    echo "<li>A sua raiz quadrada é <strong>$quadrada</strong></li>";
                    echo "<li>A sua raiz cúbica é <strong>$cubica<strong></li>";
                echo "</ul>";
            }
        ?>
    </section>
</body>
</html>