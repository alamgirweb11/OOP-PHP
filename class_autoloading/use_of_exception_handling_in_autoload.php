<?php 
// exception handling use to solve the wrong class name error 
spl_autoload_register(
   function($className){
   	      if(file_exists("classes/$className.php")){
   	      	  require_once("classes/$className.php");
   	      }else{
   	      	   throw new Exception("Unable to load $className class.");
   	      }
   });
try{
	 // call to the member class *this class is exist
	  new Member;
    // call the anonymous class *this class is not exist  
	  new NotExist;
}catch(Exception $e){
	   echo $e->getMessage(),"<br>";
}