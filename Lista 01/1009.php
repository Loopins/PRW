<?php

    $nome = readline();
    $salarioFixo = readline();
    $totalVendas = readline();

    $valor = $salarioFixo + $totalVendas*0.15;

    $valorformatado = number_format($valor ,2,".","");

    echo "TOTAL = R$ " . $valorformatado . "\n";

?>