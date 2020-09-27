<?php 
// in this example show face the problem of object copy without object cloning
/**if we want to copy the object value without object cloning it doesn't work properly
basically it copy the object reference not value**/

class UserInfo{
 public $name;
 private $email;

 public function __construct($name,$email){
	     $this->name = $name;
	     $this->email = $email;
    }
}
$obj1 = new UserInfo("Alamgir Hosen","alamgirhosen@gmail.com");
echo "Print the value before copy.<br>";
print_r($obj1);
echo "<br>";

// copy the object and change the value

echo "Print the value after copy and change some value.<br>";
$obj2 = $obj1;
$obj2->name="Abir Ahmed";
print_r($obj1);
echo "<br>";
print_r($obj2);