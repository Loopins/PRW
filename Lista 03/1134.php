<?php 
$N = 0; 
$al = 0;
$gas = 0;
$die = 0;

while(fscanf(STDIN, "%d", $N) === 1){
    
    if($N >= 1 && $N <= 3){
        if($N == 1) $al++;
        if($N == 2) $gas++;
        if($N == 3) $die++;
    }
    
    if($N == 4){
        echo "MUITO OBRIGADO" . PHP_EOL;
        echo "Alcool: " . $al . PHP_EOL;
        echo "Gasolina: " . $gas . PHP_EOL;
        echo "Diesel: " . $die . PHP_EOL;
        return 0;
    }
} 
?>