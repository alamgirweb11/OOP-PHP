<?php 
class person{
	      private $name = "";
	      private $age = "";
	  public function setName($name){
	  	    $this->name=$name;
	  	    return $this; // add this line for method chaining
	  }
	  public function setAge($age){
	  	   $this->age=$age;
	  	   return $this;
	  }
	  public function getInfo(){
	  	    echo "Hi, i am ".$this->name." and my age is ".$this->age;
	  }
}
$personInfo=new person();
$personInfo->setName("Alamgir Hosen")->setAge(20)->getInfo();