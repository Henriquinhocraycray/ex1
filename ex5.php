<?php 
    $n1 = 69;
    $n2 = 24;
    $string = "Rosa leleca";

if(is_numeric($n1)) {
    $resultado = $n1 * 2;

    if ($resultado > 100) {
        echo "O resultado $resultado é maior que 100!";
    } else {
        echo "O resultado $resultado é menor que 100!";
    }
} else {
    echo "A variável não é um número";
}

?>