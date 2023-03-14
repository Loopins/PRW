<?php
    $n = 3.14159;
    $raio = fgets(STDIN);

    $x = $n * ($raio * $raio);

    $formatacao = sprintf("%0.4f", $x);

    echo "A=$formatacao\n"
?>