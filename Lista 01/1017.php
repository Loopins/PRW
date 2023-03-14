<?php

    $n1 = readline();
    $n2 = readline();
    
    $calc = $n1 * $n2 / 12;

    $result = number_format($calc, 3, ".", "");

    echo "$result\n";

?>