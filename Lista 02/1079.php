<?php
    $N = intval(readline());


    for($i = 0; $i < $N; $i++) {

        $valores = fgets(STDIN);
        list($a, $b, $c) = sscanf($valores, "%f %f %f");

        $media = (($a * 2) + ($b * 3) + ($c * 5)) / 10;

        printf("%.1f\n", $media);
    }
?>