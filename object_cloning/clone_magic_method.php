<?php 
/** __clone magic method use for change the property in class and also for show the special result **/
class UserInfo{
	     public $name;
	     private $email;
	public function __construct($name,$email){
		    $this->name = $name;
		    $this->email = $email;
	} 
	// here change the property for using clone method
    public function __clone(){
    	   echo "During Cloning I can change anything<br>";
    	   $this->email = "abirahmed@gmaail.com";
    }
}
$obj1 = new UserInfo("Alamgir Hosen","alamgirhosen@gmail.com");
// copy of the obj1 
$obj2 = clone $obj1;
$obj2->name = "Abir Ahmed";
print_r($obj1);
echo "<br>";
print_r($obj2);