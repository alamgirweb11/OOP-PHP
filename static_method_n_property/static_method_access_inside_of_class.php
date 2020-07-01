<?php 
class getAccessFromInSide{
	    public static $count  = 0;

	   public static function counter(){
	   	  echo "It is static counter: ";
	   	  echo self::$count++."<br>"; // accessing static property inside of class
	   }
}
   //Calling static Method Outside of the Class
   getAccessFromInSide::counter();
   getAccessFromInSide::counter();
   getAccessFromInSide::counter();


 ?>