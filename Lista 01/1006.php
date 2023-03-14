<?php

    $a = fgets(STDIN);
    $b = fgets(STDIN);
    $c = fgets(STDIN);

    $media = ($a * 2.0 + $b * 3.0 + $c * 5.0) / 10.0;

    $formatacao = sprintf("%0.1f",$media);

    echo "MEDIA = $formatacao\n";

?>