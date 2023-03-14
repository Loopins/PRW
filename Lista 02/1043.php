<?php
$val = explode(" ", fgets(STDIN));
    $A = (float) $val[0];
    $B = (float) $val[1];
    $C = (float) $val[2];

if ($A < $B + $C && $B < $A + $C && $C < $B + $A) {
    $R = ($A + $B + $C) * 1.0;
    echo "Perimetro = " . number_format($R, 1, '.', '') . "\n";
} else {
    $R = (($A + $B) / 2.0) * $C;
    echo "Area = " . number_format($R, 1, '.', '') . "\n";
}
?>