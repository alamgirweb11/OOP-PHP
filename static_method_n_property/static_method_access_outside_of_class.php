<?php 
class getAccessFromOutSide{
	    public static $count  = 0;

	   public static function counter(){
	   	  echo "It is static counter";
	   }
}
   //Accessing Static Property and Method Outside of the Class
   getAccessFromOutSide::$count=5; // assigning value to static property
   echo getAccessFromOutSide::$count."<br>"; // Calling Static Property with Updated Value
   echo getAccessFromOutSide::counter(); // Calling Static method with Updated Value


 ?>