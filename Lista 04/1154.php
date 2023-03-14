<?php

$soma = 0;
$contador = 0;

while (true) {
    $idade = intval(fgets(STDIN));
    if ($idade < 0) {
        break;
    }
    $soma += $idade;
    $contador++;
}

$media = $soma / $contador;

echo number_format($media, 2, '.', '') . "\n";
