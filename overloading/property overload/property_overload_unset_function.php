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
  		echo "<br>";
	}
	// unset a property
    public function __unset($name){
    	  echo "Unsetting '$name'<br>";
    	  unset($this->data[$name]);
    }
}
// create object for TestProperty class
$obj = new TestProperty();
$obj->a="Alamgir Hosen";
echo $obj->a."<br>";
echo isset($obj->a);
unset($obj->a);
echo isset($obj->a);
echo "<br>";