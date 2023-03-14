<?php


	$x = (int)readline();

	while ($x != 0) {
    
  		for ($i = 1; $i <= $x; $i++) {
    		echo $i;
    
    		if ($i != $x) {
      			echo " ";
    		}
  		}
  
  		echo "\n";

  		$x = (int)readline();
	
    }

?>