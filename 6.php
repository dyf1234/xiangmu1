<?php
function calFn($n,$m){
	for ($i=$n; $i <=$m ; $i++) { 
		$str.=$i;
	}
	return substr_count($str, '1');
}
echo calFn(1,13);