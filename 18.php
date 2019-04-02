<?php
echo NumberOf1(10);
function NumberOf1($n){
	$a=decbin($n);
     return	substr_count($a, 1);
}