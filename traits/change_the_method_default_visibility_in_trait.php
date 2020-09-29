<?php 
// change the method visibility by using as keyword in traits
trait visible{
	     public function pub(){
	     	   echo "This is public method<br>";
	     }
	     public function priv(){
	     	   echo "This is private method<br>";
	     }
	     public function proc(){
	     	   echo "This is protected method<br>";
	     }	     
}
class cls{
	     use  visible{
	     	    // change private method to public
	     	priv as public;
	     }
	     function callPriv(){
	     	 $this->priv();
	     }
}
// make object for cls class
$obj = new cls();
$obj->pub(); // output: this is public method
//$obj->priv(); //output: this is public method
$obj->callPriv(); //output: this is public method