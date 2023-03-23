<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <section>
        <h1>Resultado final</h1>
        <p><strong></strong></p>
        <?php 
            $numero = $_REQUEST["numero"];
            $antecessor = $numero - 1; 
            $sucessor = $numero + 1;
            echo "<p>O número escolhido foi: <strong>$numero</strong>";
            echo "<p>O antecessor é: <strong>$antecessor</strong></p>";
            echo "<p>O sucessor é: <strong>$sucessor</strong></p>"
        ?>
    </section>
</body>
</html>