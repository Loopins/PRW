<?php

$casos = intval(fgets(STDIN));

for ($i = 0; $i < $casos; $i++) {
    $n = intval(fgets(STDIN));
    $primo = true;
    
    if ($n == 1) {
        $primo = false;
    }
    
    for ($j = 2; $j < $n; $j++) {
        if ($n % $j == 0) {
            $primo = false;
            break;
        }
    }
    
    if ($primo) {
        echo "$n eh primo\n";
    } else {
        echo "$n nao eh primo\n";
    }
}
