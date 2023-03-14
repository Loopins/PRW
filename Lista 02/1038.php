<?php


    $valor;

    $val = explode(" ", fgets(STDIN));
    $cod = (int) $val[0];
    $quant = (int) $val[1];

    if ($cod==1){
        floatval($valor = $quant * 4.00);
        printf("Total: R$ %.2f\n", $valor);   
    }

    elseif ($cod==2){
        floatval($valor = $quant * 4.50);
        printf("Total: R$ %.2f\n", $valor);    
    }

    elseif ($cod==3){
        floatval($valor = $quant * 5.00);
        printf("Total: R$ %.2f\n", $valor);    
    }

    elseif ($cod==4){
        floatval($valor = $quant * 2.00);
        printf("Total: R$ %.2f\n", $valor);    
    }

    elseif ($cod==5){
        floatval($valor = $quant * 1.50);
        printf("Total: R$ %.2f\n", $valor);        
    }

?>