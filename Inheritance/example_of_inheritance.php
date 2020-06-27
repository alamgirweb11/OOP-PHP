<?php 
// check user exist or not
class Member{
	   protected $loggedIn = false;
	   protected $role;
	   protected $users=[
	   	  ["username"=>"Rakib","password"=>"123","role"=>"subcriber"],
	   	  ["username"=>"Abir","password"=>"213","role"=>"admin"],
	   	  ["username"=>"Alamgir","password"=>"321","role"=>"super_admin"]
	   ];

	  public function Login($users,$pass){
	  	     foreach ($this->users as $user_info) {
	  	     extract($user_info);

	  	     if ($username==$users && $password==$pass) {
	  	     	$this->loggedIn=true;
	  	     	$this->role=$role;
	  	          }
	  	     }
	  }
}
/**
 * child class check user role
 */
class Role extends Member
{
	
	function __construct($user,$pass)
	{
		$this->Login($user,$pass);
		if ($this->role=="subcriber") {
			echo "You are logged in as a subcriber";
		}
		if ($this->role=="admin") {
			echo "You are logged in as a admin";
		}
		if ($this->role=="super_admin") {
			echo "You are logged in as a super_admin";
		}
		else{
			   echo "Invalid username/password";
		}
	}
}
// call child class
$login = new Role("Alamgir","321");