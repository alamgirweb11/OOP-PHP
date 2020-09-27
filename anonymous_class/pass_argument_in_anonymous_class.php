<?php 
// example of pass the argument in anonymous class
 // this message pass to constructor method
$message = "From Constructor Method.";
$test = (new class($message){
	      public function __construct($message){
	      	     echo $message."<br>";
	      }
	      public function log($msg){
	      	   return $msg;
	      }
});
echo $test->log("Argument of log method");