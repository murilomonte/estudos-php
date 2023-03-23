<?php 
    /* int
    $num = 010;
    echo "O valor da variável é $num"
    */

    /* int
    $v = 300;
    var_dump($v);
    */

    /* float
    $num = 3e2; // o mesmo que: 3 * 10^2
    echo "O valor é $num"; //--> 300
    */

    /* int
    $num = (int) "950";
    var_dump($num)
    */

    /* boolean
    $casado = false;
    var_dump($casado);
    echo "O valor para casado é $casado"
    */

    /* array
    $vet = [6, 2, 9, 3, 5];
    $vet2 = [6, 2.5, "Maria", 3, false];
    var_dump($vet2)
    */

    // object
    class Pessoa {
        private string $nome;
    };

    $p = new Pessoa;
    var_dump($p)
?>