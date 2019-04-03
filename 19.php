<?php
$arr=[1,2,3,4,5,6];
$val=2;
echo zb($arr,$val);
function zb($arr,$val){
	 $time=0;
	 if (count($arr)>=1) {
	 	$time++;
	 	$mid=intval(count($arr)/2);
	 	
		if ($arr[$mid]==$val) {
			return $time;
		 }elseif($arr[$mid]>$val){
			$arr=array_splice($arr,0,$mid);
			return zb($arr,$val);
		}else{
			$arr=array_slice($arr,$mid+1);
			return zb($arr,$val);
		}
	}
	return "未找到";
}

$arr=[1,2,3,4,5,6];
$val=3;
//echo zb1($arr,$val);
function zb1($arr,$val){
	if (count($arr)>=0) {
		$time=0;
		$low=0;
		$len=count($arr);
		$mid=intval(($low+$len)/2);
		while ($low<=$len) {
			$time++;
			if ($arr[$mid]==$val) {
				return $time;
			}elseif($arr[$mid]>$val){
				$low=$len-1;
			}else{
				$len=$low+1;
			}
		}
	}
	return "未找到";
}