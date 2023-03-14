<?php

    fscanf(STDIN, "%d %d", $x, $y);


    $count = 0;


    for ($i = 1; $i <= $y; $i++) {

        echo $i;
        $count++;

        if ($count == $x) {
            
            echo "\n";
            $count = 0;
        } 
    
        else {

            echo " ";
        }
    
    }

?>