<?php
// private property get access only the own class not child calss and outside of class 
class GrandFather{
	   private $name = "Alamgir Hosen"; // private propety
	   public function getName(){
	   	return $this->name;
	   }
}

class Daddy extends GrandFather // inherited class
{
	
function disPlayGrandFatherName(){
	   return $this->name; // private property will not avaiable to the inherited class
   }
}
$grandFa =new GrandFather();
echo $grandFa->getName()."<br>";

//Inherited class Daddy wants to know grandfather name
$daddy =new Daddy();
echo $daddy->disPlayGrandFatherName()."<br>"; // result in a notice

// private property can not be accessed outside of the class
$outsiderWantsToKnowGrandFatherName=new GrandFather();
echo $outsiderWantsToKnowGrandFatherName->name; //result Fatal Error