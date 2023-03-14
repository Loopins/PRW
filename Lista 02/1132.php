<?php

$X = readline();
$Y = readline();

if ($X > $Y) {
    $temp = $X;
    $X = $Y;
    $Y = $temp;
}

$sum = 0;

for ($i = $X; $i <= $Y; $i++) {
    if ($i % 13 != 0) {
        $sum += $i;
    }
}

echo $sum . PHP_EOL;
?>