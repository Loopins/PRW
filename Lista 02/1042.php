<?php

$line = readline();
list($num1, $num2, $num3) = explode(" ", $line);

if ($num1 < $num2 && $num2 < $num3) {
    echo "$num1\n$num2\n$num3\n";
} elseif ($num2 < $num1 && $num1 < $num3) {
    echo "$num2\n$num1\n$num3\n";
} elseif ($num3 < $num2 && $num2 < $num1) {
    echo "$num3\n$num2\n$num1\n";
} elseif ($num1 < $num3 && $num3 < $num2) {
    echo "$num1\n$num3\n$num2\n"; 
} elseif ($num2 < $num3 && $num3 < $num1) {
    echo "$num2\n$num3\n$num1\n";
} elseif ($num3 < $num1 && $num1 < $num2) {
    echo "$num3\n$num1\n$num2\n"; 
}


echo "$num1\n$num2\n$num3\n";
?>