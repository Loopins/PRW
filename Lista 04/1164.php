<?php

$casos = intval(fgets(STDIN));

for ($i = 0; $i < $casos; $i++) {
    $n = intval(fgets(STDIN));
    $somaDivisores = 0;
    
    for ($j = 1; $j < $n; $j++) {
        if ($n % $j == 0) {
            $somaDivisores += $j;
        }
    }
    
    if ($somaDivisores == $n) {
        echo "$n eh perfeito\n";
    } else {
        echo "$n nao eh perfeito\n";
    }
}
