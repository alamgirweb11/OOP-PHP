<?php 
class Member{
	    public $name = "Alamgir Hosen";
	    public $email = "alamgir@gmail.com";
	    public $mobile = "0175601000";
	    public $address = "Dhaka, Bangladesh";
}
$member = new Member();
// object to string convert by using serializing function/method
$memberInString = serialize($member);
echo $memberInString;