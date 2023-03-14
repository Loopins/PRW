<?php
$line = readline() ?? "0";
$vetorString = explode(" ", $line);
$A = (int) $vetorString[0];
$B = (int) $vetorString[1];

if ($A % $B == 0 || $B % $A == 0) {
    echo "Sao Multiplos\n";
} else {
    echo "Nao sao Multiplos\n";
}
?>
