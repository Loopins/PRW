<?php

$casos = intval(fgets(STDIN));

for ($i = 0; $i < $casos; $i++) {
    $entrada = explode(" ", fgets(STDIN));
    $x = intval($entrada[0]);
    $y = intval($entrada[1]);
    
    $soma = 0;
    $contador = 0;
    
    while ($contador < $y) {
        if ($x % 2 != 0) {
            $soma += $x;
            $contador++;
        }
        $x++;
    }
    
    echo $soma . "\n";
}
