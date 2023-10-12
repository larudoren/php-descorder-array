<?php
	function descOrder($arr){
	  for($i = 0; $i <= count($arr) - 2; $i++){
	    for ($j = $i+1; $j <= count($arr) -1; $j++){
	      if ($arr[$j] > $arr[$i]) {
	        $temp = $arr[$j];
	        $arr[$j] = $arr[$i];
	        $arr[$i] = $temp;
	      }
	    }
	  }
	  
	  return $arr;
	}
	
	print_r(descOrder([3, 5, 8, 4, 1, 9, -2]));
?>
