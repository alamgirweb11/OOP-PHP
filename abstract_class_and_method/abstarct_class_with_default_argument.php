<?php 
// example of absatract class
abstract class AbstractClass{
	       //  abstract method only needs to define the required arguments
	abstract protected function getName($name);
}
/**
 * child class
 */
class ChildClass extends AbstractClass
{
	public function getName($name,$prefix="Mr "){
		  return "Hi ".$prefix.$name."!";
	}
}
 $obj = new ChildClass();
 echo $obj->getName("Alamgir"); // result Hi Mr Alamgir!