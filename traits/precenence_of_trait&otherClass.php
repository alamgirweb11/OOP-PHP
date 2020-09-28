<?php 
/**
* precendence of traits and other class
* serial of precendence
*1.child class
*2.traits
*3.parent
*/
// make parent class
class Base{
	     public function sayHello(){
	     	   echo "Hi, from base class.";
	     }
}
// make trait 
trait trt{
	     public function sayHello(){
	     	   echo "Hi, from trait.";
	     }
}
// make clild class and extends parent class
class Child extends Base{
	        // used trait here
	      use trt;
	    // make a method for child class
	    /*   public function sayHello(){
	     	   echo "Hi, from child class.";
	     }*/
}
// make object
$obj = new Child();
/* first it call to the child class and if we off the child class method then it call to the trait method */
$obj->sayHello(); 