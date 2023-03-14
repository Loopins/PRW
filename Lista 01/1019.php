<?php

    $a = readline();

    $horas = (int)($a / 3600);
    $minutos = (int)(($a % 3600) / 60);
    $segundos = (int)(($a % 3600) % 60);

    echo "$horas:$minutos:$segundos\n";
?>