<?php

$n1 = readline();
$n2 = readline();
$n3 = readline();
$n4 = readline();
$n5 = readline();
$n6 = readline();

$contador = 0;
$valores = 0;

if($n1>0){
    $contador++;
    $valores +=$n1;
}

if($n2>0){
    $contador++;
    $valores +=$n2;
}

if($n3>0){
    $contador++;
    $valores +=$n3;
}

if($n4>0){
    $contador++;
    $valores +=$n4;
}

if($n5>0){
    $contador++;
    $valores +=$n5;
}

if($n6>0){
    $contador++;
    $valores +=$n6;
}

$media = $valores/$contador;

echo "$contador valores positivos\n";

echo number_format($media, 1, ".","") . "\n";


?>