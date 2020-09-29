<?php 
// conflict resolution use for solve the same method calling problem in trait
trait  test1{
	          public function firstFunction(){
	          	   echo "I am from test1<br>";
	          }
}
trait test2{
	        public function firstFunction(){
	          	   echo "I am also from test2<br>";
	          } 
}
/*class bothTest{
	     use test1,test2{
	     	    // this class will now call the method
	     	    //firstFunction from test1 only
	     	   
	     	test1::firstMethod insteadof test2;
	     }
}
// make object for bothTest class
$obj = new bothTest();
// output from 
$obj->firstFunction();*/
// make another class to see the conflict resolution effect
class bothTest2{
				use test1,test2{
				/** this class will now call the method
	     	    *first function from test1 only
	     	    **/
	     	test1::firstFunction insteadof test2;
	     	/**
	     	*firstFunction of test1 can be accessed with secondFunction
	     	**/
	     	test2::firstFunction as secondFunction;
	}
}
// make object for bothTest2
$obj2 = new bothTest2();
// output I am from test1
$obj2 ->firstFunction();
// output I am from test2
$obj2 ->secondFunction();