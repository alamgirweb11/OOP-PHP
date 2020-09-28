<?php 
// make trait class
trait test{
	       public function greetings(){
	       	    return "Welcome to trait";
	       }
}
// make a class to call the test trait class
class getOutput{
	       // using the trait here
	   use test;
}
// make object for getOutput class
$obj = new getOutput();
// executing the method from trait
echo $obj->greetings();