<?php 
// create web-forum with inheritance
class Member{  // parent class
	     public $username = "";
	     private $loggedIn = false;

	     public function login(){
	     	   $this->loggedIn=true;
	     }

	     public function logout(){
	     	   $this->loggedIn=fale;
	     }

	     public function isloggedIn(){
	     	return  $this->loggedIn;
	     }
}

class Administrator extends Member{
	      public function createForum($forumName){
	      	  echo "$this->username create a new forum: $forumName.<br>";
	      }

	      public function banMember($member){
	      	  echo "$this->username banned the member: $member->username.<br>";
	      }	      
}
// create a new member and log them in
$member=new Member();
$member->username="Alamgir Hosen";
$member->login();
echo $member->username. " is ". ($member->isloggedIn()?"logged in":"logged out")."<br>" ;

// create an Administrator and log them in
$administrator = new Administrator();
$administrator->username="Abir Ahmed";
$administrator->login();
echo $administrator->username. " is ".($administrator->isloggedIn()?"logged in":"logged out")."<br>";

// display create a new forum :testForum
$administrator->createForum("testForum");
// display Abir Ahmed banned the member: Alamgir Hosen
$administrator->banMember($member);