<?php 
// protected property get access own class and child calss not outside of class 
class GrandFather{
	   protected $name = "Alamgir Hosen"; // protected variable
	   public function getName(){
	   	return $this->name;
	   }
}

class Daddy extends GrandFather // inherited class
{
	
function disPlayGrandFatherName(){
	   return $this->name; // protected property will be avaiable to the inherited class
   }
}
$grandFa =new GrandFather();
echo $grandFa->getName()."<br>";

//Inherited class Daddy wants to know grandfather name
$daddy =new Daddy();
echo $daddy->disPlayGrandFatherName()."<br>"; // print "Alamgir Hosen"

// protected property can not be accessed outside of the class
$outsiderWantsToKnowGrandFatherName=new GrandFather();
echo $outsiderWantsToKnowGrandFatherName->name; //result Fatal Error