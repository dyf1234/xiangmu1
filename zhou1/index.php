<?php

include_once("person.php");
include_once("walk.php");
include_once("student.php");
$obj=new Student();
//$obj1=$obj->getinfo('zhangsan',15);
$obj1=$obj->getinfo('zhangsan1',15);
 $obj2=$obj->getinfo('zhangsan2',16);
 $obj3=$obj->getinfo('zhangsan3',14);
 $obj4=$obj->getinfo('zhangsan4',12);
 $obj5=$obj->getinfo('zhangsan5',18);
 $obj6=$obj->getinfo('zhangsan6',17);
 $obj7=$obj->getinfo('zhangsan7',10);
 $obj8=$obj->getinfo('zhangsan8',8);
print_r($obj1);
function obsort($n){
	$max=1;
	for ($i=1; $i <=$n ; $i++) { 
		$c="obj".$i;
		global $$c;
	}
	$a="obj".$max;
	$b="obj".$i;
	if ($$a>$$b) {
		$max=$i;
	}
	$c=$this->$age;
	return $$c->name;
}