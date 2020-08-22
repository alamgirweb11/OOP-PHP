<?php 
class WebForum{
	     public $username = "";
	     private $isloggedIn = false;
	public function login(){
		  $this->loggedIn =  true;
	}
	public function logout(){
		  $this->loggedIn = false;
	}
	public function isLoggedIn(){
		   return $this->loggedIn;
	}
}

$forum = new WebForum();
$forum->username= "Alamgir Hosen";
$forum->login();

// convert object to string by serialize function
$forumString = serialize($forum);
// convert string to object by unserialize function
$forumOject = unserialize($forumString);
echo $forumOject->username . " is " . ( $forumOject->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
