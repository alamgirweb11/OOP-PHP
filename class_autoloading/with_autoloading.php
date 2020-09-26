<?php 
function with_autoloading($class_name){
	   require_once "classes/$class_name.php";
}
spl_autoload_register('with_autoloading');
// create object for both class
new Member;
new Topic;

// another way to call auloading function by using anonymous function
/*spl_autoload_register(
   function($fileName){
   	    require_once "classes/$fileName.php";
   });
// create object for member class
 new Member();
// create object for topic class
 new Topic();*/