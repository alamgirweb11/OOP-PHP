<?php 
// example of method overriding
class Member{
	     public $username = "";
	     public $isloggedIn = false;
	 public function login(){
	 	     $this->isloggedIn=true;
	 }
	 public function logout(){
	 	   $this->isloggedIn=false;
	 }
}
/**
 * overriding the parent class
 */
class Administrator extends Member
{
	public function login(){
		 $this->isloggedIn=true;
		 echo "Login Entry: ".$this->username." is log in<br>";
	}
}

// create a new member and login them in
$member = new Member();
$member->username="Alamgir";
$member->login();
$member->logout();

// create a new admin and login them in
$admin = new Administrator();
$admin->username="Abir";
$admin->login();
$admin->logout();