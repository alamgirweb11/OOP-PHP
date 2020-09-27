<?php 
/**
*Interface that will be implement
*/
interface testInterface{
	   public function getMessage();
}
/**
*traits that will be used
*/
trait testTrait{
	   public function sayHello(){
	   	  return "Hi, I am from trait.";
	   }
}
/**
*class that will be extended
*/
class myClass{
	     public function __construct($message){
	     	     echo $message."<br>";
	     }
}
// a message to pass the constructor
$message = "From constructor method.";
// a new anonymous class, which extends the myClass class and implements the testInterface interface
$test = (new class($message) extends myClass implements testInterface{
	    public function log($msg){
	    	  return $msg."<br>";
	    }
	    public function getMessage(){
	    	  echo "From interface.<br>";
	    }
	    // use the traits
	    use testTrait;
});
echo  $test->log("From log method.");
echo $test->getMessage();
echo $test->sayHello();