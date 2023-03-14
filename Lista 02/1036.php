<?php

    $linha = fgets(STDIN);
    list($a, $b, $c) = sscanf($linha, "%f %f %f");

    $delta = pow($b, 2) - 4 * $a * $c;

    if ($a == 0 || $delta < 0) {
        
    echo "Impossivel calcular\n";
        
    }
    
    else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        printf("R1 = %.5f\n", $x1);
        printf("R2 = %.5f\n", $x2);
        
        
    }

?>