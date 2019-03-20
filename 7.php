<?php
function cs($m){
	while ($m%2==0) {
		$m=$m/2;
	}
	while ($m%3==0) {
		$m=$m/3;
	}
	while ($m%5==0) {
		$m=$m/5;
	}
	if ($m==1) {
		return 1;
	}else{
		return 0;
	}

}
 function solu($n){
 	$m=1;
 	$count=0;
 	while (1) {
 		if (cs($m)) {
 			$count++;
 		}
 		if ($n==$count) {
			return $m;
 		}
 		$m++;
 	}
 }
 echo solu(7);