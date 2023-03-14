<?php

    $n = (int)readline();

    if ($n < 0) {
        exit();
    }

    $fatorial = 1;
    
    for ($i = 1; $i <= $n; $i++) {
        $fatorial *= $i;
    }

    echo $fatorial . "\n";

?>
