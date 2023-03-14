<?php
    $X = 0;
    $X = intval(fgets(STDIN));
    for($i = 0; $i < 10000; $i++) {
        if($i % $X == 2) {
            echo $i . "\n";
        }
    }
?>