<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="ivalor1" value="<?=$valor1?>">

            <label for="peso1">1º peso</label>
            <input type="number" name="peso1" id="ipeso1" value="<?=$peso1?>">
            
            <label for="valor1">2º Valor</label>
            <input type="number" name="valor2" id="ivalor2" value="<?=$valor2?>">
            
            <label for="valor1">2º peso</label>
            <input type="number" name="peso2" id="ipeso2" value="<?=$peso2?>">
            
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo de Médias</h2>
        <?php
            if ($valor1 == 0 || $valor2 == 0) {
                echo "<p>Informe os valores.</p>";
            } else {
                $mediaSim = number_format((($valor1 + $valor2)) / 2, 2, ',', '.');
                $mediaPon = number_format((($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2) , 2, ',', '.');
                echo "<p>Analisando os valores $valor1 e $valor2</p>";
                echo "<ul>";
                    echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $mediaSim</li>";
                    echo "<li><strong>A média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $mediaPon</li>";
                echo "</ul>";
            }
        ?>        
    </section>
</body>
</html>