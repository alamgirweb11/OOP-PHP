<?php 
class Member{
	    public $name = "Alamgir Hosen";
	    public $email = "alamgir@gmail.com";
	    public $mobile = "0175601000";
	    public $address = "Dhaka, Bangladesh";
	 // object to string convert by using sleep magic method
	public function __sleep(){
		    return['name','email'];
	}
}
$member = new Member();
$memberInString = serialize($member);
echo $memberInString;