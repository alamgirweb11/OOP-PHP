<?php 
 // example of class
class test{
	    public function greetings(){
	    	   return "Welcome<br>";
	    }
}
$obj = new test();
echo $obj->greetings();

// Example of a single use anonymous class
$test = (new class{
	   public function saySomething(){
	   	     // echo this message
	   	      return "This is anonymous class.";
	   }
});
// call the log function within anonymous class
echo $test->saySomething();