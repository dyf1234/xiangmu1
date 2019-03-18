<?php

function sum($min,$max){

$sum=($max+$min)*($max/2);
	return $sum;
}
//echo sum(1,100);
function sum1($min,$max){
	$sum=0;
	for ($i=$min; $i <=$max ; $i++) { 
		$sum+=$i;
	}
	return $sum;
}
//echo sum1(1,100);

function sum2($min,$max){
	$sum=0;
	
	for ($i=$min; $i <=$max ; $i++) { 
		
	}


		return $sum;
}	
echo sum2(1,100);

function jc($n){
	$sum=1;
	for ($i=1; $i <=$n ; $i++) { 
		
		$sum=$sum*$i;

	}
	return $sum;
}
//echo jc(4);
function jc1($n){

	if ($n>=1) {
		return $sum;
	}
	
	if ($n==1) {
		return 1;
	}else if($n==2){
		return 2;
	}else{
		return $sum=$sum*jc1($n-1);
	}
}
//echo jc1(4);

function hw($str){
		$hw=strrev($str);
		if ($hw==$str) {
			echo "回文";
		}else{
			echo "不是回文";
		}
}
//echo hw('abbaa');
