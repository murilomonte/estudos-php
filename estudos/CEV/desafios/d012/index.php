<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <?php
        $segundo = $_GET['segundo'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="total">Qual é o total de segundos?</label>
            <input type="number" name="segundo" id="isegundo" value="<?=$segundo?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Totalizando tudo</h1>
        <?php 
            #segundo = 1.234.567
            $semana =  intdiv($segundo, 604800);
            $semanaResto = $segundo % 604800;

            $dia = intdiv($semanaResto, 86400);
            $diaResto = $semanaResto % 86400;

            $hora = intdiv($diaResto, 3600 );
            $horaResto = $diaResto % 3600;

            $minuto = intdiv($horaResto, 60);
            $minutoResto = $horaResto % 60;

            $segundoResto = $minutoResto;

            echo "Analisando o valor que você digitou, <strong>$segundo segundos</strong> equivalem a um total de:";
                echo "<ul>";
                    echo "<li>$semana semanas</li>";
                    echo "<li>$dia dias</li>";
                    echo "<li>$hora horas</li>";
                    echo "<li>$minuto minutos</li>";
                    echo "<li>$segundoResto segundos</li>";
                echo "</ul>";
        ?>
    </section>
</body>
</html>