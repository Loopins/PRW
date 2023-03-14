<?php

    $a = fgets(STDIN);
    $b = fgets(STDIN);
    $c = fgets(STDIN);
    $d = fgets(STDIN);

    $DIFERENCA = ($a * $b - $c * $d);

    $formatacao = sprintf("%0.0f",$DIFERENCA);

    echo "DIFERENCA = $formatacao\n";

?>