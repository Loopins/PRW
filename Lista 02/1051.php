<?php

$salario = floatval(fgets(STDIN));

if ($salario <= 2000) {
    echo "Isento\n";
} elseif ($salario <= 3000) {
    $imposto = ($salario - 2000) * 0.08;
    echo "R$ " . number_format($imposto, 2, '.', '') . "\n";
} elseif ($salario <= 4500) {
    $imposto = ($salario - 3000) * 0.18 + 80;
    echo "R$ " . number_format($imposto, 2, '.', '') . "\n";
} else {
    $imposto = ($salario - 4500) * 0.28 + 350;
    echo "R$ " . number_format($imposto, 2, '.', '') . "\n";
}

?>