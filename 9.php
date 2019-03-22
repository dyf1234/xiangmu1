<?php

function num($arr){
	$len=count($arr);
	for ($i=0; $i <$len ; $i++) { 
		for ($j=$i+1; $j <$len ; $j++) { 
			if ($arr[$i].$arr[$j]>$arr[$j].$arr[$i]) {
				$temp=$arr[$i];
				
				$arr[$i]=$arr[$j];

				$arr[$j]=$temp;

				//print_r($arr);
			}
		}
	}
	return implode('',$arr);
}
 $arr=[3,32,321];
 echo num($arr);