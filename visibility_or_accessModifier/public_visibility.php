<?php 
// public property get access the own class, child calss and outside of class 
class GrandFather{
	   public $name = "Alamgir Hosen"; // public property
	   public function getName(){
	   	return $this->name;
	   }
}

class Daddy extends GrandFather // inherited class
{
	
function disPlayGrandFatherName(){
	   return $this->name; // public variable will be avaiable to the inherited class
   }
}
$grandFa =new GrandFather();
echo $grandFa->getName()."<br>";

//Inherited class Daddy wants to know grandfather name
$daddy =new Daddy();
echo $daddy->disPlayGrandFatherName()."<br>"; // print "Alamgir Hosen"

// public variables can also be accessed outside of the class
$outsiderWantsToKnowGrandFatherName=new GrandFather();
echo $outsiderWantsToKnowGrandFatherName->name; //result "Alamgir Hosen"