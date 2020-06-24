<?php 
// example of constructor method without using any parameter
class FirstExample{
	  // __constructor method
	   public function __construct(){
	   	      echo "Hi, I am execute first.";
	   }
	   public function saySomething(){
	   	   echo "I am also execute.";
	   }
}
$obj1 =new FirstExample(); // automitacally execute __constructor method and print first
echo "<br>";
$obj1->saySomething();
echo "<br>";

// example of constructor method with parameter
class SecondExample{
	     // property declaration
	   private $model;
	public function __construct($model){
		   $this->model=$model;
	}
	public function car(){
		      return "Model of this car is ".$this->model;
	}
}
// pass the value of the variable once we create the object
$obj2 =new SecondExample('BMW'); // Passing Argument to Constructor Parameter
echo $obj2->car();