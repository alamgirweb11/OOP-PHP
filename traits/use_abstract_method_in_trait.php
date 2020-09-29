<?php 
// make a abstract method in trait
trait abtrt{
	    abstract public function greetings();
}
// again declare the trait method  body in a class
class cls{
	    use abtrt;
	   public function greetings($name){
	   	  echo "Hi, $name! welcome.";
	   }
}
// make object for cls class
$obj = new cls();
// call to the abstract method
$obj->greetings("Alamgir");