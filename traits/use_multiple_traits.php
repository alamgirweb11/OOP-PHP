<?php 
 // multiple traits use in one trait
trait trtOne{
	       function func1(){
	       	   echo "I am from trait one.<br>";
	       }
}
trait trtTwo{
	       function func2(){
	       	   echo "I am from trait two.";
	       }
}
trait useInOne{
	  use trtOne,trtTwo;
}
class output{
	  use useInOne;
}
// make object for output 
$obj = new output();
$obj->func1();
$obj->func2();