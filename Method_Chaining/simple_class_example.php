<?php 
class person{
	      private $name = "";
	      private $age = "";
	  public function setName($name){
	  	    $this->name=$name;
	  }
	  public function setAge($age){
	  	   $this->age=$age;
	  }
	  public function getInfo(){
	  	    echo "Hi, i am ".$this->name." and my age is ".$this->age;
	  }
}
$obj=new person();
$obj->setName("Alamgir Hosen");
$obj->setAge(20);
$obj->getInfo();