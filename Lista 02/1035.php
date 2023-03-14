<?php


    $linha = fgets(STDIN);
    list($a, $b, $c, $d) = sscanf($linha, "%d %d %d %d");

    if ($b > $c && $d > $a && ($c + $d) > ($a + $b) && $c > 0 && $d > 0 && $a % 2 == 0){
        echo "Valores aceitos\n";
    }
    
    else{
        echo "Valores nao aceitos\n";
    }

?>