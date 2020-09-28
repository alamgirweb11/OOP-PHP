<?php 
// use one more traits in one class
trait subscriber{
	      public function asSubscriber(){
	      	  echo "You are log in as a subscriber.<br>";
	      }
}
trait moderator{
	      public function asModerator(){
	      	  echo "You are log in as a moderator.<br>";
	      }
}
trait admin{
	      public function asAdmin(){
	      	  echo "You are log in as a admin.<br>";
	      }
}
// used trait 
class Member{
	    use subscriber,moderator,admin;
	    public function run(){
	    	     $this->asSubscriber();
	    	     $this->asModerator();
	    	     $this->asAdmin();
	    	     echo "Member login done";
	    }
}
// make object
$member = new Member();
$member->run();