<?php
function solu($n,$m){
		if ($m<1||$n<1) {
			 return -1;
		}
		if ($m>$n) {
			return -1;
		}
		$res=0;
		for ($i=2; $i <=$n ; $i++) { 
			$res=($res+$m)%$i;
		}
		return $res;
}
echo solu(10,2);