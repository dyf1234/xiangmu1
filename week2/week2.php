<?php

//不同的三位数
function number($arr){
	$len=count($arr);
	for ($i=0; $i <$len ; $i++) { 
		for ($j=0; $j <$len ; $j++) { 
			for ($k=0; $k <$len ; $k++) { 
				if ($arr[$i]!=$arr[$j]&&$arr[$i]!=$arr[$k]&&$arr[$j]!=$arr[$k]) {
					$result[]=$arr[$i].$arr[$j].$arr[$k];
				}
			}
		}
	}
	return implode(' ', $result);
}
//echo number([1,2,3,4]);

class Db{
	private static $_instance=null;
	private function  __construct(){

	}
	 private function __clone(){

	 }
	 public static function instance(){
	 	if (!(self::$_instance) instanceof Db) {
	 		self::$_instance=new Db();

	 	}
	 	return self::$_instance;
	 }
}
function my_dir($dir){
	
	$handle=opendir($dir);

	while (($file=readdir($handle))!==false) {
		if ($file=='.' ||$file=='..') {
			continue;
		}

		$filePath=$dir.'/'.$file;
		if (is_dir($filePath)) {
			my_dir($filePath);
		}else{
			echo $filePath."<pre>";
		}
	}
	closedir($dir);

}
//$dir='/usr/share/nginx/html';
// my_dir($dir);

function findCommonPath($aPath,$bPath){
	$aPathArr=explode('/',$aPath);
	$bPathArr=explode('/', $bPath);
	$len=count($aPathArr)>count($bPathArr)? count($bPathArr) :count($aPathArr);

	for ($i=0; $i <$len ; $i++) { 
		if ($aPathArr[$i]==$bPathArr[$i]) {
			$result[]=$aPathArr[$i];
		}
	}
	return implode('/', $result);
}
 $aPath='/a/b/c/d/test.php';
 $bPath='/a/b/d/c/test.php';
 echo findCommonPath($aPath,$bPath);
