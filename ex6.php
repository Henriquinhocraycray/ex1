<?php 
    $v1 = 50;

    if ($v1 = 41 && $v1 <= 50){
        echo "Você esta na velocidade correta";
    } elseif ($v1 == 40) {
        echo "Vá com cuidado! Você esta a $v1 km/h";
    } else {
        echo "Você foi multado por excesso de velocidade";
    }
?>