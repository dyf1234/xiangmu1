<?php

function summ($max){
	
	$sum=0;
	for ($i=1; $i <=$max; $i++) { 
		$sum=$sum+$i;
	}
	return $sum;
}


 function jc($n){
	$c=$n;
	for ($i=1; $i<$n ; $i++) { 
		$c=$c*($n-$i);
	}
	return $c;
}
function d($a){
	for ($i=0; $i <strlen($a) ; $i++) { 
		$num=0;
		for ($j=1; $j <strlen($a)-1 ; $j++) { 
			if ($a[$i]==$a[$j]) {
				$num++;
			}
			if ($num==3) {
				return $a[$j];
			}
		}
	}
}
echo d('Have you ever gone shopping and');
?>