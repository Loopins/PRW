<?php

    $a = fgets(STDIN);
    $b = fgets(STDIN);


    $prod = $a * $b;

    $formatacao = sprintf("%0.0f",$prod);

    echo "PROD = $formatacao\n";

?>