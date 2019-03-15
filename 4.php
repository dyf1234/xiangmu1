<?php

Class Db{
	public function fb($n){
		if ($n==0) {
			return 0;
		}else if($n==1||$n==2){
			return 1;
		}else{
			$f=$this->fb($n-1)+$this->fb($n-2);
			return $f;
		}
	}
	public function ffb($n){
			$arr[0]=1;
			$arr[1]=1;
			for ($i=2; $i <$n ; $i++) { 
				$arr[$i]=$arr[$i-1]+$arr[$i-2];
			}
			return $arr[$n-1];
	}
}
$db=new Db();

//echo $db->fb(4);
echo $db->ffb(4);