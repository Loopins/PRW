<?php

$val = explode(" ", fgets(STDIN));
$N = intval($val[count($val) - 1]);
$A = intval($val[0]);

$soma = 0;

for ($i = 0; $i < $N; $i++) {
    $soma +=  $A + $i;
}

echo $soma . "\n";

?>
