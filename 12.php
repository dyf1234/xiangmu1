<?php
function Sum_Solution($n){
	$arr=range(1, $n);
	return array_sum($arr);
}
echo Sum_Solution(5);