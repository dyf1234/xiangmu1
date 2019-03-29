<?php
header("content-type:text/html;charset=utf-8");
function FirstNotRepeatingChar($str){
		$len=strlen($str);
		if ($len>10000) {
			return "字符串长度超出限制，重新输入";
		}
		for ($i=0; $i <$len ; $i++) { 
			$nums=substr_count($str, $str[$i]);
			if ($nums==1) {
				return $i+1;
			}
		}
		return -1;
}

$str='aacbde';
echo FirstNotRepeatingChar($str);