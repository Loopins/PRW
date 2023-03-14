<?php
$N = 0;
$soma = 0;

while (fscanf(STDIN, "%d", $N)) {
    if ($N == 0) {
        return 0;
    }
    if (($N % 2) == 0) {
        $soma += $N;
    } else {
        $soma += ++$N;
    }
    for ($i = 0; $i < 4; $i++) {
        $N += 2;
        $soma += $N;
    }
    echo $soma . "\n";
    $soma = 0;
}
?>
