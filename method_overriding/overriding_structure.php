<?php 
// Method overriding structure
class ParentClass{
	   public function pfunc($value)
	   {
	   	# code...
	   }
}

/**
 * 
 */
class ChildClass extends ParentClass
{
	
	   public function pfunc($value)
	   {
	   // For ChildClass objects, this method is called
	   	// instead of the parent class's pfunc()
	   }
}