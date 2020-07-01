<?php 
class course{
	 // parent class
       protected static $courseName = "PHP Advance";

    public static function getCourseName(){
    	   return static::$courseName;
    }
  }

    /**
     * create child class
     */
    class changeCourseName extends Course
    {
       protected static $courseName = "PHP CMS Batch";
    }

 echo changeCourseName::getCourseName();  //result PHP CMS Batch jNot PHP Advance
   // this result get only for use static keyword, static keyword execute child class property and method code and other code 
 ?>