<?php

$array=[1,2,3,4,5,6];
FindNumbersWithSum($array,5);
function FindNumbersWithSum($array, $sum){
		$len=count($array);
		for ($i=0; $i <$len ; $i++) { 
			for ($j=0; $j <$len ; $j++) { 
				if ($array[$i]!=$array[$j]&&($array[$i]+$array[$j])==$sum) {
					$arr[]=$array[$i].','.$array[$j];
					
					
				}
			}
		}
		foreach ($arr as $key => $v) {
			$ar[]=explode(',', $v);
			for ($i=0; $i <count($ar) ; $i++) { 


				if (min($ar[$i][0]*$ar[$i][1])) {
					return $ar[$i][0].','.$ar[$i][1];
				}
			}
		}
		
		
		
		
}