<?php
$a = 0;
$b = 0;

$a = readline();

for ($b = 1; $b <= $a; $b++) {
    echo $b . " " . ($b * $b) . " " . ($b * $b * $b) . PHP_EOL;
    echo $b . " " . ($b * $b + 1) . " " . ($b * $b * $b + 1) . PHP_EOL;
}
?>