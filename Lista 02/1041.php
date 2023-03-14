<?php


$val = explode(" ", fgets(STDIN));
    $x = (float) $val[0];
    $y = (float) $val[1];

if ($x == 0.0 && $y == 0.0) {
    echo "Origem\n";
} elseif ($x == 0.0) {
    echo "Eixo Y\n";
} elseif ($y == 0.0) {
    echo "Eixo X\n";
} elseif ($x > 0.0 && $y > 0.0) {
    echo "Q1\n";
} elseif ($x < 0.0 && $y > 0.0) {
    echo "Q2\n";
} elseif ($x < 0.0 && $y < 0.0) {
    echo "Q3\n";
} else {
    echo "Q4\n";
}

?>
