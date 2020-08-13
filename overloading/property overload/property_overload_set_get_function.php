<?php 
class TestProperty{
	// location for overloaded data
	private $data = array();
    public function __set($name,$value){
       echo "Setting '$name' property to '$value'<br>";
       $this->data[$name] = $value;
    }
   public function __get($name){
   	    echo "Getting '$name' property with value : ";
   	   if (array_key_exists($name, $this->data)) {
   	      return $this->data[$name];
   	   }
   }
}

$obj = new TestProperty();
$obj->a = "Alamgir Hosen";
echo $obj->a."<br>";