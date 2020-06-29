<?php 
// stop method overriding by using final keyword before method and class
class Member{
	   public $username = "";
	   private $isloggedIn = false;
	 public final function login(){
	 	  $this->isloggedIn = true;
	 }
	public function logout(){
		   $this->isloggedIn = false;
	}
	public function isloggedIn(){
		   return $this->isloggedIn;
	}
}
/**
 * create child class
 */
class badMember extends Member
{
	 public function login(){
	 	  $this->isloggedIn = true;
	 	  // do something bad
	 }  
}