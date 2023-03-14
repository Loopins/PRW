<?php

while (true) {
    $val = explode(" ", fgets(STDIN));
    $n1 = intval($val[0]);
    $n2 = intval($val[1]);
    
    if ($n1 == $n2) {
        break;
    }
    
    if ($n1 < $n2) {
        echo "Crescente\n";
    } else {
        echo "Decrescente\n";
    }
}

?>