<?php

    $notas = array();
    $cont = 0;

while ($cont < 2) {
    $nota = floatval(fgets(STDIN));
    
    if ($nota >= 0 && $nota <= 10) {
        $notas[$cont] = $nota;
        $cont++;
    } else {
        echo "nota invalida\n";
    }
}

$media = array_sum($notas) / count($notas);
echo "media = " . number_format($media, 2) . "\n";
?>