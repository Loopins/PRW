<?php
   $S = 0;
   for ($i = 1; $i <= 100; $i++) {
      $S += 1/$i;
   }
   echo number_format($S ,2) . "\n";
?>
