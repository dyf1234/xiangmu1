<?php
	function sxh($a){
		$b=$a%10;
		$c=$a/10%10;
		$d=$a/100%10;
		if ($a==($b*$b*$b+$c*$c*$c+$d*$d*$d)) {
			return true;
		}else{
			return false;
		}
	}
	echo  sxh(153);
?>