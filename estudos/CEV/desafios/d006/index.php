<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idividendo" value="<?=$dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="idivisor" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura de uma divisão</h2>
        <?php  
            if ($dividendo == 0 && $divisor == 0 ) {
                echo "<p>Insira um dividendo e um divisor</p>";
            } else {
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;
                echo "<table>";
                    echo "<tr>";
                        echo "<td>$dividendo</td>";
                        echo "<td>$divisor</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>$resto</td>";
                        echo "<td>$quociente</td>";
                    echo "</tr>";
                echo "</table>";
                echo "<p>css não é o meu forte :(</p>";
            }     
        ?>
    </section>
</body>
</html>