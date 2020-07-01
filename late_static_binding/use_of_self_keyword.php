<?php 
class course{
	 // parent class
       protected static $courseName = "PHP Advance";

    public static function getCourseName(){
    	   return self::$courseName;
    }
  }

    /**
     * create child class
     */
    class changeCourseName extends Course
    {
       protected static $courseName = "PHP CMS Batch";
    }

 echo changeCourseName::getCourseName();  //result PHP Advance Not PHP CMS Batch
  // because where we use self keyword it gives us on that class property and method base output. self keyword don't execute child class any keyword
 ?>