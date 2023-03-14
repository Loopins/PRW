<?php


$entrada = fgets(STDIN);
$entrada = explode(" ", $entrada);
$a = floatval($entrada[0]);
$b = floatval($entrada[1]);
$c = floatval($entrada[2]);


if ($a < $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}
if ($b < $c) {
    $temp = $b;
    $b = $c;
    $c = $temp;
}
if ($a < $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}


if ($a >= $b + $c) {
    echo "NAO FORMA TRIANGULO\n";
} else {

    if ($a**2 == $b**2 + $c**2) {
        echo "TRIANGULO RETANGULO\n";
    } elseif ($a**2 > $b**2 + $c**2) {
        echo "TRIANGULO OBTUSANGULO\n";
    } else {
        echo "TRIANGULO ACUTANGULO\n";
    }


    if ($a == $b && $b == $c) {
        echo "TRIANGULO EQUILATERO\n";
    } elseif ($a == $b || $a == $c || $b == $c) {
        echo "TRIANGULO ISOSCELES\n";
    }
}


?>
