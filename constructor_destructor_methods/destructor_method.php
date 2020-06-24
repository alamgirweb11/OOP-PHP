<?php 
//  desctructor method exmaple 
class SimpleClass{
	    // constructor method
	public function __construct(){
		   echo "Execute First<br>";
	}
	// normal method
	public function saySomething(){
		  echo "Execute Second<br>";
	}
	// destructor method
	public function __destruct(){
		    echo "Execute last<br>";
	}
}
$obj1 =new SimpleClass(); // automatically execute construct and destruct method
$obj1->saySomething();

// destructor method can't execute any parameter but it receive the other method property
class AnotherClass{
	        public $name;
	   //constructor method with parameter
	      public function __construct($val){
	      	  return $this->name=$val;
	      }
	     public function sayHello(){
	     	   echo "Hello Destructor<br>";
	     }
	     public function __destruct(){
	     	   echo "Bye Bye ".$this->name;
	     }
} 
$obj2=new AnotherClass("Destructor"); 
$obj2->sayHello();