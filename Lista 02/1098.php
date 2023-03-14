<?php
for ($i = 0; $i <= 2; $i += 0.2) {
    for ($j = 1; $j <= 3; $j++) {
        $x = $i + $j;
        if ($i == 0 || $i == 1 || $i > 1.9) {
            echo "I={$i} J={$x}\n";
        } else {
            echo "I=" . number_format($i, 1) . " J=" . number_format($x, 1) . "\n";
        }
    }
}
?>
