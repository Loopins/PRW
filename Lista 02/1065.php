<?php

$N = 0;
$x = 0;

for($i = 0; $i < 5; $i++) {
    $N = intval(fgets(STDIN));
    if($N%2 == 0) {
        $x++;
    }
}

echo $x . " valores pares\n";

?>