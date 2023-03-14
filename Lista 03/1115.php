<?php

while (true) {
    fscanf(STDIN, "%d %d", $x, $y);

    if ($x == 0 || $y == 0) {
        if ($x == $y) {
            break;
        }
        echo ($y == 0) ? "eixo x\n" : "eixo y\n";
    } elseif ($x > 0) {
        echo ($y > 0) ? "primeiro\n" : "quarto\n";
    } else {
        echo ($y > 0) ? "segundo\n" : "terceiro\n";
    }
}

?>
