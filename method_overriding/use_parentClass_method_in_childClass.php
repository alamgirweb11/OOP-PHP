<?php 
class Member{
	    public $username = "";
	    public $isloggedIn = false;
	  public function login(){
	  	$this->isloggedIn = true;
	  }
	  public function logout(){
	  	   $this->isloggedIn = false;
	  }
}

/**
 * use parent class method by using parent keyword and scope resulation operator
 */
class Administrator extends Member
{
	public function login(){
		parent::login(); // using parent keyword
		echo "Login entry : $this->username is logged in<br>";
	}
}

// create a new member and login them in
$member = new Member();
$member->username = "Alamgir Hosen";
$member->login();
$member->logout();

// create a new admin and login them in
$admin = new Administrator();
$admin->username = "Abir Ahmed";  
$admin->login();   // result: login entry Abir Ahmed is logged in