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
echo "Convert the forum to a string: $forumString<br>";