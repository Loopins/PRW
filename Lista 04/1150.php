<?php


    $x = (int)readline();
    $z = (int)readline();

    while ($z <= $x) {
        $z = (int)readline();
    }

    $soma = $x;
    $contagem = 1;

    while ($soma <= $z) {
        $contagem++;
        $soma += $x + $contagem - 1;
    }

    echo $contagem . "\n";

?>
