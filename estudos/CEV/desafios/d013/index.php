<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
    <style>
        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="ivalor" value="<?=$valor?>">
            <p style="font-size: 12px;">*Notas disponíveis: R$100, R$50, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php
        echo "<h1>Saque de $valor realizado</h1>";
        echo "O caixa eletrônico vai te entregar as seguintes notas: </br>";

        $cem = intdiv($valor, 100);
        $resto = $valor % 100;

        $cinq = intdiv($resto, 50);
        $resto = $resto % 50;

        $dez = intdiv($resto, 10);
        $resto = $resto % 10;

        $cinco = intdiv($resto, 5);

        echo "<ul>";
            echo "<li><img src=\"notas maneiras/100.jpg\" alt=\"Cem reais\"> x$cem</li>";
            echo "<li><img src=\"notas maneiras/50.PNG\" alt=\"Cinquenta reais\"> x$cinq</li>";
            echo "<li><img src=\"notas maneiras/10.PNG\" alt=\"Dez reais\"> x$dez</li>";
            echo "<li><img src=\"notas maneiras/5.PNG\" alt=\"Cinco reais\"> x$cinco</li>";
        echo "</ul>";
        ?>  
    </section>

</body>
</html>