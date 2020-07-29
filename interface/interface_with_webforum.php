<?php 
// create interface class
interface webForum{
	 public function save();
	 public function load();
	 public function delete();
}
// implements interface in a class
class Member implements webForum{
	   private $username;
	   private $location;
	   private $homepage;
	public function __construct($username,$location,$homepage){
		     $this->username = $username;
		     $this->location = $location;
		     $this->homepage = $homepage;
	}
    public function getUsername(){
    	  return $this->username;
    }
    public function getLocation(){
    	  return $this->location;
    }
    public function getHomepage(){
    	  return $this->homepage;
    }
    public function save(){
    	  echo "Saving member to database.<br>";
    }
    public function load(){
    	  echo "Loading member from database.<br>";
    }
    public function delete(){
    	  echo "Deleting member from database.<br>";
    }    
}
// create a new class and implements interface 
class Topic implements webForum{
	   private $subject;
	   private $author;
	   private $CreatedTime;
	public function __construct($subject,$author){
		   $this->subject = $subject;
		   $this->author = $author;
		   $this->CreatedTime = time();
	}

	public function showHeader(){
		  $createdTimeString = date('l jS M Y h:i:s A',$this->CreatedTime);
		  $authorName = $this->author->getUsername();
		  echo "$this->subject(created on $createdTimeString by $authorName).<br>";
	}
	 public function save(){
    	  echo "Saving topic to database.<br>";
    }
    public function load(){
    	  echo "Loading topic from database.<br>";
    }
    public function delete(){
    	  echo "Deleting topic from database.<br>";
    } 
}
// get the result
// create object for member class
$aMember = new Member("Alamgir Hosen","Dhaka","https://example.com.bd");
echo $aMember->getUsername()." lives in ".$aMember->getLocation()."<br>";
// create object for topic class
$aTopic = new Topic("Red Rose",$aMember);
$aTopic->showHeader();
$aTopic->save();

/*result will be
Alamgir Hosen lives in Dhaka
Red Rose(created on Wednesday 29th Jul 2020 02:26:44 PM by Alamgir Hosen).
Saving topic to database.
*/
