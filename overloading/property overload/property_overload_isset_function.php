<?php 
class TestProperty{
	   private $data = array();
	public function __set($name,$value){
		  echo "Setting '$name' Property to '$value'<br>";
		 $this->data[$name] = $value;
	}
	public function __get($name){
		   echo "Getting '$name' Property with Value ";
		   if (array_key_exists($name, $this->data)) {
		       return $this->data[$name];
		   }
	}
	// checking property value is set
	public function __isset($name){
  		echo "Is '$name' property set?<br>";
  		echo isset($this->data[$name])?"Yes '$name' Property is set":"No '$name' property is not set";
	}
}
// create object for TestProperty class
$obj = new TestProperty();
$obj->a="Alamgir Hosen";
echo $obj->a."<br>";
isset($obj->a);
isset($obj->b);