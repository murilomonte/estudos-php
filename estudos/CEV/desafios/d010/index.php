<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de idade</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <?php 
        $nascimento = $_GET['nascimento'] ?? 0;
        $anoAtual = date("Y");
        $anoSel = $_GET['anoSel'] ?? $anoAtual;
        date_default_timezone_set("America/Sao_Paulo");
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="inascimento" value="<?=$nascimento?>">

            <label for="ano">Quer saber sua idade em que ano? Atualmente estamos em <?=$anoAtual?></label>
            <input type="number" name="anoSel" id="ianoSel" value="<?=$anoSel?>">

            <input type="submit" value="Qual será minha idade">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            if ( $nascimento > $anoSel) {
                echo "<p>Insira uma data válida.</p>";
            } else {
                $resultado = $anoSel - $nascimento;
                echo "<p>Quem nasceu em $nascimento vai ter <strong>$resultado anos</strong> em $anoSel</p>";
            }
        ?>
    </section>
</body>
</html>