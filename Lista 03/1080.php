<?php
$n = 0;
$max = -1;
$p = 0;

for ($i = 1; $i < 101; ++$i) {
    fscanf(STDIN, "%d", $n);
    if ($max < $n) {
        $max = $n;
        $p = $i;
    }
}

printf("%d\n%d\n", $max, $p);
?>