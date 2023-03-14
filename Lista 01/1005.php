<?php

    $a = fgets(STDIN);
    $b = fgets(STDIN);

    $media = ($a * 3.5 + $b * 7.5) / 11.0;

    $formatacao = sprintf("%0.5f",$media);

    echo "MEDIA = $formatacao\n";

?>