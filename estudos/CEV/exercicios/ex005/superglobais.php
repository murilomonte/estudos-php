<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super globais</title>
    <link rel="stylesheet" href="../../csstemp/style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                // nome do cookie / valor / quanto tempo vai durar (3600 pois uma hora tem 3600 segundos, e time() pois indica o tempo atual)
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "Funcionou";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobals GLOBALS</h1>";
                var_dump($GLOBALS)
            ?>
        </pre>
    </main>
</body>
</html>