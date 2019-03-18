<?php
include_once("person.php");
include_once("walk.php");
class Student extends Person implements Walk
{
	public function run(){
		
	}

		public function getinfo(){
			$name=$this->name;
			$age=$this->age;
			$info=['name'=>$name,'age'=>$age];
			return $info;

		}
}