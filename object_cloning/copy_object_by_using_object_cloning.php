<?php 
/** in this example solve the problem of object value copy properly by using object cloning **/
class UserInfo{
	        public $name;
	        private $email;

	   public function __construct($name,$email){
	   	       $this->name = $name;
	   	       $this->email = $email;
	   }
}
// create object for SolveProblem class
$obj1 = new UserInfo("Alamgir Hosen","alamgirhosen@gmail.com");
echo "Print the value before Copy.<br>";
print_r($obj1);
echo "<br>";

// copy the object and change the value
echo "Print the value after copy.<br>";
$obj2 = clone $obj1;
$obj2->name = "Abir Ahmed"; 
// email won't be change beacuse email is private property
print_r($obj1);
echo "<br>";
print_r($obj2);