<?php 
interface MyInterface{
	    public function method();
	    public function anotherMethod();
}
// interface implement in class
class newClass implements MyInterface{
	   public function method(){
	   	// code to implement the method
	   }

	   public function anotherMethod(){
	   	   // code to implement the method
	   }
}