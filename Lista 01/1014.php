<?php

    $n1 = readline();
    $n2 = readline();

    $result = $n1 / $n2;

    $formatacao = number_format($result , 3, ".", "");

    echo "$formatacao km/l\n";

?>