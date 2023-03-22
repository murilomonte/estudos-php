<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado</h1>
    <?php 
        var_dump($_REQUEST);
        $nome = $_REQUEST["nome"] ?? "sem nome"; // coalescencia nula
        $sobrenome = $_REQUEST["sobrenome"] ?? "sem nome";

        echo "$nome $sobrenome"
        /*
        $_GET
        $_POST
        $_REQUEST (funciona independente das actions acima. Sendo a junção de $_GET, $_POST e $_COOKIES)
        */
    ?>
</body>
</html>