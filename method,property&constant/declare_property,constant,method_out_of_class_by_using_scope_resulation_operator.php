<?php 
class SimpleClass{
	    public $var = "Public Property";
   		public const a = "Public Constant"; // public constant property declaration
       
       // public method declare
   		public function disName($name){
   			  echo $name;
   		}
   	}
   		//call class and method by using scope resulation operator
   		echo SimpleClass::a;
   		echo "<br>";
   		SimpleClass::disName("Alamgir Hosen");